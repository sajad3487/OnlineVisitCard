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

    public function downloadCard ($card_id){

        $card = $this->cardService->getCard($card_id);
        if ($card->type !=3){
            $image1 = 'cardTemp/01.png';
        }else{
            $image1 = 'cardTemp/03.png';
        }
        $image2 = 'images/download.png';

        list($width,$height) = getimagesize($image2);
        $image1 = imagecreatefromstring(file_get_contents($image1));
        $image2 = imagecreatefromstring(file_get_contents($image2));
        imagealphablending($image1, false);
        imagesavealpha($image1, true);
        imagecopymerge($image1,$image2,80,80,0,0,$width,$height,100);
//        header('Content-Type:image/png');
//        imagepng($image1);

        imagepng($image1,'merged.png');

        $image22 = 'images/download.png';
        $image11 = 'merged.png';

        list($width,$height) = getimagesize($image22);
        $image11 = imagecreatefromstring(file_get_contents($image11));
        $image22 = imagecreatefromstring(file_get_contents($image22));
        imagealphablending($image11, false);
        imagesavealpha($image11, true);
        imagecopymerge($image11,$image22,80,500,0,0,$width,$height,100);
//        header('Content-Type:image/png');
//        imagepng($image11);

        imagepng($image11,'pic/merged-03.png');

        $path = "pic/merged-03.png";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($path).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        flush(); // Flush system output buffer
        readfile($path);

    }
}
