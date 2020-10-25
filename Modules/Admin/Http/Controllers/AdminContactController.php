<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contact\Http\Service\ContactService;

class AdminContactController extends Controller
{
    /**
     * @var ContactService
     */
    private $contactService;

    public function __construct(
        ContactService $contactService
    )
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contacts = $this->contactService->getAllContact();
        $active = 6 ;
        return view('admin.adminContacts',compact('contacts','active'));
    }


    public function makeUnread($id)
    {
        $this->contactService->makeUnread($id);
        return back();
    }

    public function show ($id){
        $contact = $this->contactService->getContact ($id);
        $this->contactService->makeRead($id);
        $active = 6 ;
        return view('admin.showContact',compact('contact','active'));
    }

}
