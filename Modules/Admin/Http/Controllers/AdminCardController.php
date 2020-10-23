<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Service\CardService;

class AdminCardController extends Controller
{
    /**
     * @var CardService
     */
    private $cardService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        CardService $cardService,
        UserService $userService
    )
    {
        $this->cardService = $cardService;
        $this->userService = $userService;
    }

    public function index()
    {
        $active = 2;
        $cards = $this->cardService->getAllCards();
        return view('admin.adminCards',compact('cards','active'));
    }

    public function show($id)
    {
        $active = 2;
        $card = $this->cardService->getCard($id);
        $landing_url =$card->landing->id;
        return view('admin.adminShowCard',compact('active','card','landing_url'));
    }

    public function edit($id)
    {
        return view('admin::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function userCards ($user_id){
        $active = 4;
        $cards = $this->cardService->getUserCard($user_id);
        $customer = $this->userService->getUserById($user_id);
        return view('admin.adminCards',compact('cards','active','customer'));
    }

    public function changeStatus (Request $request,$card_id){
        $data['status'] =$request->status;
        $this->cardService->updateCard($data,$card_id);
        return back();
    }
}
