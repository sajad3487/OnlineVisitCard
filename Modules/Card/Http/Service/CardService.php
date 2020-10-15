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

    public function createCard ($data){
        return $this->cardRepository->create($data);
    }

}
