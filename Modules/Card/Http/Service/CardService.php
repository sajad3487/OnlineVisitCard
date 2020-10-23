<?php


namespace Modules\Card\Http\Service;


use Modules\Card\Repository\CardRepository;

class CardService
{
    /**
     * @var CardRepository
     */
    private $cardRepository;

    public function __construct(
        CardRepository $cardRepository
    )
    {
        $this->cardRepository = $cardRepository;
    }

    public function createCard($data)
    {
        return $this->cardRepository->create($data);
    }

    public function getUserCard ($user_id){
        return $this->cardRepository->getCardsOfUser ($user_id);
    }

    public function getCard ($card_id){
        return $this->cardRepository->getCardById($card_id);
    }

    public function uploadLogo($request)
    {
        $destination = base_path() . '/public/logo/';
        $filename = rand(1111111, 99999999);
        $file = $request->file('file');
        $newFileName = $filename . $request->file->getClientOriginalName();
        $file->move($destination, $newFileName);
        return '/logo/' . $newFileName;
    }

    public function uploadPicture($request)
    {
        $destination = base_path() . '/public/picture/';
        $filename = rand(1111111, 99999999);
        $file = $request->file('picture');
        $newFileName = $filename . $request->picture->getClientOriginalName();
        $file->move($destination, $newFileName);
        return '/picture/' . $newFileName;
    }

    public function updateCard($data,$id){
        return $this->cardRepository->update($data,$id);
    }

    public function getAllCards (){
        return $this->cardRepository->getAllCards ();
    }

}
