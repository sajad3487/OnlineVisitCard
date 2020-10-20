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

}
