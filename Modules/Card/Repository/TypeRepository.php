<?php


namespace Modules\Card\Repository;


use App\DesignPatterns\Repository;
use Modules\Card\Entities\Type;

class TypeRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Type();
    }

}
