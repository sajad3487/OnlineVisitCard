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

}
