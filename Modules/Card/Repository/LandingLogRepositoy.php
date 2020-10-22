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

    public function getInfoOfDate ($date,$landing_id){
        return landingLog::where('landing_id',$landing_id)
            ->whereDate('created_at',$date)
            ->first();
    }

    public function getInfoOfLastYear ($landing_id){
        $last_year = Carbon::now()->subYear()->format('Y-m-d');
        $months = landingLog::where('landing_id',$landing_id)
            ->where('created_at','>',$last_year)->get()->groupBy(function($d) {
                return Carbon::parse($d->created_at)->format('Y-m');
            })->toArray();
        return $months;
//        return landingLog::where('landing_id',$landing_id)
//            ->whereDate('created_at',$month)
//            ->get();
    }

}
