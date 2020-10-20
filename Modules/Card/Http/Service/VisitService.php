<?php


namespace Modules\Card\Http\Service;


use Modules\Card\Repository\VisitRepository;

class VisitService
{
    /**
     * @var VisitRepository
     */
    private $visitRepo;

    public function __construct(
        VisitRepository $visitRepository
    )
    {
        $this->visitRepo = $visitRepository;
    }

    public function getVisitOfLandingByIp ($ip,$landing_id){
        return $this->visitRepo->getVisitLandingByIp ($ip,$landing_id);
    }

    public function createVisit ($data){
        return $this->visitRepo->create($data);
    }

}
