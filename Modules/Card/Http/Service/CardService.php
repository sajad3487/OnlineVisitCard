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

}
