<?php

namespace App\Http\Controllers;

use App\Http\Requests\customerSearchProduct;
use App\Http\Requests\ProfileRequest;
use App\Http\Services\UserService;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Modules\Category\Http\Services\CategoryService;
use Modules\Order\Http\Services\OrderService;
use Modules\Product\Http\Services\ProductService;

class HomeController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        UserService $userService
    )
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $active = 1;
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.index',compact('active','user'));
    }

    public function profile (){
        $active = 5;
        $customer = $this->userService->getUserById(auth()->id());
        $user = $this->userService->getUserById(auth()->id());
        return view('customer.profile',compact('active','customer','user'));
    }

    public function updateProfile (ProfileRequest $request){
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = $this->userService->getUserById(auth()->id());
        $this->userService->updateUser($data,$user->id);
        return back();
    }


}
