<?php


namespace Modules\Card\Http\Service;


use Modules\Card\Repository\LandingLogRepositoy;
use Modules\Card\Repository\LandingRepository;

class LandingLogService
{
    /**
     * @var LandingLogRepositoy
     */
    private $landingLogRepo;

    public function __construct(
        LandingLogRepositoy $landingLogRepositoy
    )
    {
        $this->landingLogRepo = $landingLogRepositoy;
    }

    public function addOrCreateVisitCounter ($landing_id){
        $landingLog =$this->landingLogRepo->visitTodayOfLanding ($landing_id);
        if($landingLog == null){
            $data['landing_id']= $landing_id;
            $this->landingLogRepo->create($data);
        }else{
            $landingLog->click += 1;
            $landingLog->save();
        }
    }

}
