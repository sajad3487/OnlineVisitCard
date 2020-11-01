<?php

namespace Modules\Card\Http\Controllers;

use App\Charts\UserChart;
use App\Http\Services\UserService;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
            $this->visitService->createVisit($data);
            $this->landingLogService->addOrCreateVisitCounter($id);
        };
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

    function raf_create_vcard($contact){
        $format_name = utf8_encode($contact['name']);
        $format_email = utf8_encode($contact['email']);
        $format_tel = utf8_encode($contact['tel']);
        $format_fax = utf8_encode($contact['fax']);
        $format_www = utf8_encode($contact['website']);
        $format_address = utf8_encode($contact['address']);

        return 'BEGIN%3AVCARD%0D%0AVERSION%3A4.0%0D%0AN%3A%3B'.$format_name.'%3B%3B%3B%0D%0AFN%3A'.$format_name.'%0D%0AEMAIL%3A'.$format_email.'%0D%0AORG%3A'.$format_name.'%0D%0ATEL%3A'.$format_tel.'%0D%0ATEL%3Btype%3DFAX%3A'.$format_fax.'%0D%0AURL%3Btype%3Dpref%3A'.$format_www.'%0D%0AADR%3A%3B'.$format_address.'%3B%3B%3B%3B%3BSpain%0D%0AEND%3AVCARD';
    }

    function conversion($hex) {
        $r = hexdec(substr($hex,0,2)); //Converting to rgb
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));

        return $r + $g + $b; //Adding up the rgb values
    }
}
