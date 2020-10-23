<?php


namespace Modules\Card\Http\Service;


use Modules\Card\Repository\LandingRepository;

class LandingService
{
    /**
     * @var LandingRepository
     */
    private $landingRepo;

    public function __construct(
        LandingRepository $landingRepository
    )
    {
        $this->landingRepo = $landingRepository;
    }

    public function createLandingPage ($data){
        return $this->landingRepo->create($data);
    }

    public function getUserLanding ($user_id){
        return $this->landingRepo->getLandingOfUser($user_id);
    }

    public function getLandingById ($id){
        return $this->landingRepo->getById($id);
    }

    public function updateLandingPage($data,$id){
        return $this->landingRepo->update($data,$id);
    }

    public function getLandingWithAnalyzer ($user_id){
        return $this->landingRepo->getAnalyzerLandingOfUser ($user_id);
    }

    public function getAllActiveLandingPages (){
        return $this->landingRepo->getActiveLandingPages();
    }

    public function changeStatus($id){
        $landing = $this->landingRepo->getById($id);
        if($landing->status == 1){
            $data['status']=2;
        }elseif ($landing->status == 2){
            $data['status']= 1 ;
        }
        return $this->landingRepo->update($data,$id);
    }

}
