<?php

namespace Modules\Card\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Requests\CardRequest;
use Modules\Card\Http\Service\CardService;

class CardController extends Controller
{
    /**
     * @var CardService
     */
    private $cardService;

    public function __construct(
        CardService $cardService
    )
    {
        $this->cardService = $cardService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('card::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customer.newOrder');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CardRequest $request)
    {
        $data['user_id']=auth()->id();
        $data['fname']=$request->fname;
        $data['lname']=$request->lname;
        $data['email']=$request->email;
        $data['tel']=$request->phone;
        $data['company']=$request->company;
        $data['position']=$request->position;
        $card = $this->cardService->createCard($data);
        dd($card);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('card::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('card::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
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
