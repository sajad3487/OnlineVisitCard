<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Service\CardService;
use Modules\Card\Http\Service\LandingService;

class AdminLandingController extends Controller
{
    /**
     * @var LandingService
     */
    private $landingService;
    /**
     * @var CardService
     */
    private $cardService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        LandingService $landingService,
        CardService $cardService,
        UserService $userService
    )
    {
        $this->landingService = $landingService;
        $this->cardService = $cardService;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $active = 3;
        $landings = $this->landingService->getAllActiveLandingPages();
        return view('admin.adminLanding',compact('active','landings'));
    }

    public function edit($id)
    {
        $landing = $this->landingService->getLandingById($id);
        return view('admin.adminEditLandingPage',compact('landing'));
    }

    public function update(Request $request, $id)
    {
        if (isset($request->file) && $request != null){
            $data['logo'] = $this->cardService->uploadLogo($request);
        }
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['tel'] = $request->phone;
        $data['company_name'] = $request->company_name;
        $data['position'] = $request->position;
        $landing = $this->landingService->getLandingById($id);
        $card_id = $landing->card_id;
        $data['user_id'] = $landing->user_id;

        $this->cardService->updateCard($data,$card_id);

        $data = $request->all();
        unset($data['file']);
        $data['card_id'] = $card_id;
        $data['user_id'] = $landing->user_id;
        if (isset($request->picture) && $request->picture != null){
            $data['picture'] =$this->cardService->uploadPicture($request);
        }
        $this->landingService->updateLandingPage($data,$id);
        return redirect("/admin/landing/$id/edit");
    }

    public function destroy($id)
    {
        //
    }

    public function changeStatus ($id){
        $this->landingService->changeStatus($id);
        return back();
    }

    public function userLanding ($user_id){
        $active = 4;
        $landings = $this->landingService->getUserLanding($user_id);
        $customer = $this->userService->getUserById($user_id);
        return view('admin.adminLanding',compact('active','landings','customer'));
    }

    public function dataAnalysis (Request $request,$landing_id){
        $active = 3;
        $period = 7;
        if (isset($request->period)){
            $period = $request->period;
        }
        $landing = $this->landingService->getLandingById($landing_id);
        $landings = $this->landingService->getLandingWithAnalyzer($landing->user_id);
        $customer = $this->userService->getUserById($landing->user_id);
        return view('admin.adminDataAnalysis',compact('active','period','landings','landing_id','customer'));
    }
}
