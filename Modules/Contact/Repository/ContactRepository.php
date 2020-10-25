<?php


namespace Modules\Contact\Repository;


use App\DesignPatterns\Repository;
use Modules\Contact\Entities\contact;

class ContactRepository extends Repository
{
    public function __construct()
    {
        $this->model = new contact();
    }

}
