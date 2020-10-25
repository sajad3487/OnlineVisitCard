<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contact\Http\Requests\ContactRequest;
use Modules\Contact\Http\Service\ContactService;

class ContactController extends Controller
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

    public function create(ContactRequest $request)
    {
        $this->contactService->createContact($request->all());
        return back();
    }

}
