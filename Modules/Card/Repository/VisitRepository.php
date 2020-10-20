<?php


namespace Modules\Card\Repository;


use App\DesignPatterns\Repository;
use Illuminate\Support\Carbon;
use Modules\Card\Entities\Visit;

class VisitRepository extends Repository
{
    /**
     * @var Visit
     */
    public $model;

    public function __construct()
    {
        $this->model = new Visit();
    }

    public function getVisitLandingByIp ($ip,$landing_id){
        return Visit::where('ip',$ip)
            ->where('landing_id',$landing_id)
            ->whereDate('created_at',Carbon::today())
            ->first();
    }

}
