<?php


namespace Modules\Card\Http\Service;


use Modules\Card\Repository\TypeRepository;

class TypeService
{
    /**
     * @var TypeRepository
     */
    private $typeRepo;

    public function __construct(
        TypeRepository $typeRepository
    )
    {
        $this->typeRepo = $typeRepository;
    }

    public function getTypeById ($id){
        return $this->typeRepo->getById($id);
    }

}
