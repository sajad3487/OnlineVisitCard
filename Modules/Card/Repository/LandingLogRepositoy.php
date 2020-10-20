<?php


namespace Modules\Card\Repository;


use App\DesignPatterns\Repository;
use Carbon\Carbon;
use Modules\Card\Entities\landingLog;

class LandingLogRepositoy extends Repository
{
    /**
     * @var landingLog
     */
    public $model;

    public function __construct()
    {
        $this->model = new landingLog();
    }

    public function visitTodayOfLanding ($landing_id){
        return landingLog::where('landing_id',$landing_id)
            ->whereDate('created_at',Carbon::today())
            ->first();
    }

}
