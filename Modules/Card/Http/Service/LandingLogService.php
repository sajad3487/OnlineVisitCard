<?php


namespace Modules\Card\Http\Service;


use Carbon\Carbon;
use Modules\Card\Entities\landing;
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

    public function addOrCreateVisitCounter ($landing_id,$type){
        $landingLog =$this->landingLogRepo->visitTodayOfLanding($landing_id);
        if($landingLog == null){
            $data['landing_id']= $landing_id;
            $data[$type]= 1;
        }else{
            $landing =$landingLog->toArray();
            $data[$type]= $landing[$type]+ 1;
            $this->landingLogRepo->update($data,$landing['id']);
        }
    }

    public function getLabel ($days){
        for ($i = 0; $i < $days; $i++){
            $date = $days-$i ;
            $dates[$i] = Carbon::now()->subDay($date-1)->format('Y-m-d');
        }
        return $dates;
    }

    public function getData ($dates,$landing_id,$type){
        $data = [];
        foreach ($dates as $key=>$date){
            $info = $this->landingLogRepo->getInfoOfDate($date,$landing_id);
            if ($info == null){
                $data[$key] = 0;
            }else{
                switch ($type){
                    case "visit":
                        $data[$key] = (int)$info->click;
                        break;
                    case "work_website":
                        $data[$key] = (int)$info->work_website;
                        break;
                    case "personal_website":
                        $data[$key] = (int)$info->personal_website;
                        break;
                    case "facebook":
                        $data[$key] = (int)$info->facebook;
                        break;
                    case "twitter":
                        $data[$key] = (int)$info->twitter;
                        break;
                    case "linkdin":
                        $data[$key] = (int)$info->linkedin;
                        break;
                    case "skype":
                        $data[$key] = (int)$info->skype;
                        break;
                    case "whatsapp":
                        $data[$key] = (int)$info->whatsapp;
                        break;
                    case "instagram":
                        $data[$key] = (int)$info->instagram;
                        break;
                }

            }
        }
        return $data;
    }

    public function getMonthLabel($months){
        for ($i = 0; $i < $months; $i++){
            $month = $months-$i ;
            $dates[$i] = Carbon::now()->subMonth($month-1)->format('Y-m');
        }
        return $dates;
    }

    public function getMonthData ($months,$landing_id,$type){
        $raw_data = $this->landingLogRepo->getInfoOfLastYear($landing_id);
        $data = [];
        foreach ($months as $key=>$month){
            if(array_search($month, array_keys($raw_data)) !== false){
                $sum = 0;
                foreach ($raw_data[$month] as $raw){
                    $sum += $raw[$type];
                }
                $data[$key] = $sum;
            }else{
                $data[$key] = 0;
            }
        }
//        dd(array_search("2020-10", array_keys($raw_data)),$months,$raw_data,$data);
        return $data;
    }

}
