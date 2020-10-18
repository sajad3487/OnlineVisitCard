<?php


namespace Modules\Card\Repository;


use App\DesignPatterns\Repository;
use Modules\Card\Entities\landing;

class LandingRepository extends Repository
{
    /**
     * @var landing
     */
    public $model;

    public function __construct()
    {
        $this->model = new Landing();
    }

    public function getLandingOfUser ($user_id){
        return landing::where('user_id',$user_id)
            ->with('card')
            ->get();
    }

}
