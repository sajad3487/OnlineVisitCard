<?php


namespace Modules\Card\Repository;


use App\DesignPatterns\Repository;
use Modules\Card\Entities\Card;

class CardRepository extends Repository
{
    /**
     * @var card
     */
    public $model;

    public function __construct()
    {
        $this->model = new Card();
    }

    public function getCardsOfUser ($user_id){
        return Card::where('user_id',$user_id)
            ->where('status','>',0)
            ->with('landing')
            ->get();
    }

    public function getCardById ($id){
        return Card::with('landing')->find($id);
    }

    public function getAllCards(){
        return Card::where('status','>',0)
            ->with('landing')
            ->get();
    }

}
