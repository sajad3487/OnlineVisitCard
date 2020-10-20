<?php

namespace Modules\Card\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Requests\CardRequest;
use Modules\Card\Http\Service\CardService;
use Modules\Card\Http\Service\LandingService;

class CardController extends Controller
{
    /**
     * @var CardService
     */
    private $cardService;
    /**
     * @var CardService
     */
    private $landingService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        CardService $cardService,
        LandingService $landingService,
        UserService $userService
    )
    {
        $this->cardService = $cardService;
        $this->landingService = $landingService;
        $this->userService = $userService;
    }

    public function index()
    {
        $active = 2;
        $cards = $this->cardService->getUserCard(auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.cards',compact('active','cards','user'));
    }

    public function create()
    {
        return view('customer.newOrder');
    }

    public function store(CardRequest $request)
    {
        if (isset($request->file) && $request != null){
            $data['logo'] = $this->cardService->uploadLogo($request);
        }
        $data['user_id'] = auth()->id();
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['tel'] = $request->phone;
        $data['company_name'] = $request->company;
        $data['position'] = $request->position;
        $data['color'] = $request->color;
        $card = $this->cardService->createCard($data);
        $data = $request->all();
        $data['card_id']=$card->id;
        if (isset($request->picture) && $request->picture != null){
            $data['picture'] =$this->cardService->uploadPicture($request);
        }
        unset($data['file']);
        $data['user_id'] = auth()->id();
        $this->landingService->createLandingPage($data);
        return redirect('/');
    }

    public function show($id)
    {
        $active = 2;
        $card = $this->cardService->getCard($id);
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.showCard',compact('active','card','user'));
    }

    public function reorder($id){
        dd($id);
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

}
