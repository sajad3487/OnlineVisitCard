<?php

namespace Modules\Card\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Requests\CardRequest;
use Modules\Card\Http\Service\CardService;
use Modules\Card\Http\Service\LandingService;
use Modules\Card\Http\Service\TypeService;

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
    /**
     * @var UserService
     */
    private $typeService;

    public function __construct(
        CardService $cardService,
        LandingService $landingService,
        UserService $userService,
        TypeService $typeService
    )
    {
        $this->cardService = $cardService;
        $this->landingService = $landingService;
        $this->userService = $userService;
        $this->typeService = $typeService;
    }

    public function index()
    {
        $active = 2;
        $cards = $this->cardService->getUserCard(auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        $remaining_card = ($user->paid_card - $cards->count());
        return view('customer.cards',compact('active','cards','user','remaining_card'));
    }

    public function create($type_id)
    {
        if ($type_id < 4){
            return view('customer.newOrder',compact('type_id'));
        }else{
            $type_price = $this->typeService->getTypeById($type_id)->price;
            return view('customer.payment',compact('type_id','type_price'));
        }
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
        $cards = $this->cardService->getUserCard(auth()->id());
        $user = $this->userService->getUserById(auth()->id())->toArray();
        $remaining_card = ($user['paid_card'] - $cards->count());
//
//        if ($remaining_card == 0){
//            $type_price = $this->typeService->getTypeById($type_id)->price;
//            return view('customer.payment',compact('type_id','type_price'));
//        }
        return redirect('card');
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

    public function paymentCompany ($type){
        $user = $this->userService->getUserById(auth()->id())->toArray();
        $type = $this->typeService->getTypeById($type);
        $user['paid_card'] += $type->quantity;
        $this->userService->updateUser($user,$user['id']);
        return redirect('card');
    }

}
