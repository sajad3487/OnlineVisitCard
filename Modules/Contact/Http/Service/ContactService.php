<?php


namespace Modules\Contact\Http\Service;


use Modules\Contact\Http\Requests\ContactRequest;
use Modules\Contact\Repository\ContactRepository;

class ContactService
{
    /**
     * @var ContactRepository
     */
    private $contactRepo;

    public function __construct(
        ContactRepository $contactRepository
    )
    {
        $this->contactRepo = $contactRepository;
    }

    public function createContact($data){
        return $this->contactRepo->create($data);
    }

    public function getAllContact (){
        return $this->contactRepo->getAll();
    }

    public function getContact ($id){
        return $this->contactRepo->getById($id);
    }

    public function makeRead ($id){
        $data['status'] = 1 ;
        return $this->contactRepo->update($data,$id);
    }

    public function makeUnread ($id){
        $data['status'] = 0;
        return $this->contactRepo->update($data,$id);
    }

}
