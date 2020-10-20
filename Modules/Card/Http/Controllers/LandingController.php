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
        return view('customer.landingPage',compact('card'));
    }

    public function edit($id)
    {
        $landing = $this->landingService->getLandingById($id);
        return view('customer.editLandingPage',compact('landing'));
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

    public function dataAnalysis (){
        $users = User::select(\DB::raw("COUNT(*) as count"))

            ->whereYear('created_at', date('Y'))

            ->groupBy(\DB::raw("Month(created_at)"))

            ->pluck('count');


        $chart = new UserChart;

        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);

        $chart->dataset('New User Register Chart', 'line', $users)->options([

            'fill' => 'true',

            'borderColor' => '#51C1C0'

        ]);


        return view('user', compact('chart'));

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
}
