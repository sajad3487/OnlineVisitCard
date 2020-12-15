<?php

namespace Modules\Card\Http\Controllers;

use App\Charts\UserChart;
use App\Http\Services\UserService;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Modules\Card\Http\Requests\CardRequest;
use Modules\Card\Http\Service\CardService;
use Modules\Card\Http\Service\LandingLogService;
use Modules\Card\Http\Service\LandingService;
use Modules\Card\Http\Service\VisitService;

class LandingController extends Controller
{
    /**
     * @var LandingService
     */
    private $landingService;
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var CardService
     */
    private $cardService;
    /**
     * @var CardService
     */
    private $visitService;
    /**
     * @var LandingLogService
     */
    private $landingLogService;

    public function __construct(
        LandingService $landingService,
        UserService $userService,
        CardService $cardService,
        VisitService $visitService,
        LandingLogService $landingLogService
    )
    {
        $this->landingService = $landingService;
        $this->userService = $userService;
        $this->cardService = $cardService;
        $this->visitService = $visitService;
        $this->landingLogService = $landingLogService;
    }

    public function index()
    {
        $active = 3;
        $landings = $this->landingService->getUserLanding(auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.landing',compact('active','landings','user'));
    }

    public function create()
    {
        return view('card::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $landing = $this->landingService->getLandingById($id);
        if ($landing->status != 1 ){
            return redirect('/');
        }
        $ip = $this->GetRealIp();
        $visit =$this->visitService->getVisitOfLandingByIp($ip,$id);
        if($visit == null){
            $data['ip']=$ip;
            $data['landing_id']=$id;
            $data['type']="visit";
            $this->visitService->createVisit($data);
            $this->landingLogService->addOrCreateVisitCounter($id,"click");
        }
        $landing = $this->landingService->getLandingById($id);
        $card = $this->cardService->getCard($landing->card_id);
        if ($landing->status == 0 || $card->status == 0){
            return redirect('/');
        }
        $contact['name'] = $card->fname." ".$card->lname;
        $contact['email'] = $card->email;
        $contact['tel'] = $card->tel;
        $contact['fax'] = $card->landing->fax;
        $contact['website'] = $card->landing->personal_website;
        $contact['address'] = $card->landing->home_address;
        $vCard =$this->raf_create_vcard($contact);
        $color = ltrim($card->color,'#');
        if ($this->conversion($color) > 500){
            $theme = "light_mode" ;
        }else{
            $theme = "dark_mode";
        }

        return view('customer.landingPage',compact('card','vCard','theme'));
    }

    public function edit($id)
    {
        $landing = $this->landingService->getLandingById($id);
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.editLandingPage',compact('landing','user'));
    }

    public function update(CardRequest $request, $id)
    {
        if (isset($request->file) && $request != null){
            $data['logo'] = $this->cardService->uploadLogo($request);
        }
        $data['user_id'] = auth()->id();
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['tel'] = $request->phone;
        $data['company_name'] = $request->company_name;
        $data['position'] = $request->position;
        $data['color'] = $request->color;
        $card_id = $this->landingService->getLandingById($id)->card_id;
        $this->cardService->updateCard($data,$card_id);
        $data = $request->all();
        unset($data['file']);
        $data['card_id'] = $card_id;
        $data['user_id'] = auth()->id();
        if (isset($request->picture) && $request->picture != null){
            $data['picture'] =$this->cardService->uploadPicture($request);
        }
        $this->landingService->updateLandingPage($data,$id);
        return redirect("/card/landing/$id/show");
    }

    public function destroy($id)
    {
        //
    }

    public function dataAnalysis (Request $request){
        $active = 4;
        $period = 7;

        $landings = $this->landingService->getLandingWithAnalyzer(auth()->id());
        if ($request->all() != null){
            $period = $request->period;
            $landing_id = $request->landing_id;
        }elseif($landings->count() != 0){
            $landing_id = $landings->first()->id;
        }else{
            $landing_id = null;
            $landings = null;
        }
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.dataAnalysis',compact('active','period','landings','landing_id','user'));
    }

    public function GetRealIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }

    public function changeStatus ($id){
        $this->landingService->changeStatus($id);
        return back();
    }

    public function raf_create_vcard($contact){

        $name = $contact['name'];
        $email = $contact['email'];
        $mobile_no = $contact['tel'];
        $vCard = "BEGIN:VCARD\r\n";
        $vCard .= "VERSION:3.0\r\n";
        $vCard .= "FN:" . $name . "\r\n";
        $vCard .= "EMAIL;TYPE=internet,pref:" . $email . "\r\n";
        $vCard .= "TEL;TYPE=work,voice:" . $mobile_no . "\r\n";
        $vCard .= "END:VCARD\r\n";
        return $vCard;
    }

    public function conversion($hex) {
        $r = hexdec(substr($hex,0,2)); //Converting to rgb
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));

        return $r + $g + $b; //Adding up the rgb values
    }

    public function social ($social, $landing_id){

        $landing = $this->landingService->getLandingById($landing_id);

        $ip = $this->GetRealIp();
        $visit =$this->visitService->getSocialVisitByIp($ip,$landing_id,$social);
        if($visit == null){
            $data['ip']=$ip;
            $data['landing_id']=$landing_id;
            $data['type']=$social;
            $this->visitService->createVisit($data);
            $this->landingLogService->addOrCreateVisitCounter($landing_id,$social);
        }
        if ($landing[$social] != null){
            if($social == "personal_website" || $social == "work_website"){
                if (strpos($landing[$social], 'http') === false){
                    return Redirect::to('http://' . $landing[$social]);
                }else{
                    return Redirect::to($landing[$social]);
                }
            }elseif ($social == "whatsapp"){
                return Redirect::to('https://wa.me/' . $landing[$social]);
            }
            return Redirect::to($landing[$social]);
        }

        return back();
    }

    public function addToContact($landing_id){

        $ip = $this->GetRealIp();
        $visit =$this->visitService->getSocialVisitByIp($ip,$landing_id,"download");
        if($visit == null){
            $data['ip']=$ip;
            $data['landing_id']=$landing_id;
            $data['type']="download";
            $this->visitService->createVisit($data);
            $this->landingLogService->addOrCreateVisitCounter($landing_id,"download");
        }
        return back();
    }
}
