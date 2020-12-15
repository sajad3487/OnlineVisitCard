<?php

namespace App\Http\Controllers;

use App\Http\Requests\customerSearchProduct;
use App\Http\Requests\ProfileRequest;
use App\Http\Services\UserService;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Modules\Card\Http\Service\TypeService;
use Modules\Category\Http\Services\CategoryService;
use Modules\Order\Http\Services\OrderService;
use Modules\Product\Http\Services\ProductService;

class HomeController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var TypeService
     */
    private $typeService;

    public function __construct(
        UserService $userService,
        TypeService $typeService
    )
    {
        $this->middleware('auth');
        $this->userService = $userService;
        $this->typeService = $typeService;
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
        $type1 = $this->typeService->getTypeById(1);
        $type2 = $this->typeService->getTypeById(2);
        $type3 = $this->typeService->getTypeById(3);
        $type4 = $this->typeService->getTypeById(4);
        $type5 = $this->typeService->getTypeById(5);
        $type6 = $this->typeService->getTypeById(6);
        return view('customer.index',compact('active','user','type1','type2','type3','type4','type5','type6'));
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
