<?php

namespace Modules\Card\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Service\CardService;
use Modules\Card\Http\Service\LandingService;

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

    public function __construct(
        LandingService $landingService,
        UserService $userService,
        CardService $cardService
    )
    {
        $this->landingService = $landingService;
        $this->userService = $userService;
        $this->cardService = $cardService;
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
        $card = $this->cardService->getCard($landing->card_id);
        return view('customer.landingPage',compact('card'));
    }

    public function edit($id)
    {
        return view('customer.editLandingPage');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function dataAnalysis (){

    }
}
