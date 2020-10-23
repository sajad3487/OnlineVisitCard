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
            ->where('status','>',0)
            ->with('card')
            ->get();
    }

    public function getAnalyzerLandingOfUser ($user_id){
        return landing::where('user_id',$user_id)
            ->where('status','>',0)
            ->where('type',3)
            ->with('card')
            ->get();
    }

    public function getActiveLandingPages (){
        return landing::where('status','>',0)
            ->with('card')
            ->get();
    }

}
