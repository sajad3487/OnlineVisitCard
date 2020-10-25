<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Services\UserService;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Http\Requests\AdminRequest;
use Modules\Admin\Http\Requests\AdminSectionRequest;
use Modules\Card\Http\Service\TypeService;
use Modules\Category\Http\Services\CategoryService;
use Modules\Order\Http\Services\InvoiceService;
use Modules\Order\Http\Services\OrderService;
use Modules\Page\Http\Service\SectionService;

class AdminController extends Controller
{
    /**
     * @var SectionService
     */
    private $sectionService;
    /**
     * @var TypeService
     */
    private $typeService;

    public function __construct(
        SectionService $sectionService,
        TypeService $typeService
    )
    {
        $this->sectionService = $sectionService;
        $this->typeService = $typeService;
    }

    public function index()
    {
        $active = 1;
        return view('admin.dashboard',compact('active'));
    }

    public function firstPage (){
        $slider = $this->sectionService->getSection('slider');
        $wwdheader = $this->sectionService->getSection('wwdheader');
        $wwd1 = $this->sectionService->getSection('wwd1');
        $wwd2 = $this->sectionService->getSection('wwd2');
        $wwd3 = $this->sectionService->getSection('wwd3');
        $wwd4 = $this->sectionService->getSection('wwd4');
        $testimonial_header = $this->sectionService->getSection('testimonial_header');
        $testimonials = $this->sectionService->getAllSection('testimonial');
        $price_header = $this->sectionService->getSection("price_header");
        $type1 = $this->typeService->getTypeById(1);
        $type2 = $this->typeService->getTypeById(2);
        $type3 = $this->typeService->getTypeById(3);
        $type4 = $this->typeService->getTypeById(4);
        $type5 = $this->typeService->getTypeById(5);
        $type6 = $this->typeService->getTypeById(6);
        $contact = $this->sectionService->getSection("contact");
        $info = $this->sectionService->getSection("info");
        return view('admin.adminFirstPage',compact('slider','wwdheader','wwd1','wwd2','wwd3','wwd4','testimonial_header','testimonials','price_header','type1','type2','type3','type4','type5','type6','contact','info'));
    }

    public function updateSection (AdminSectionRequest $request,$section_id){
        $data = $request->all();
        if (isset($request->file) && $request != null){
            $data['file'] = $this->sectionService->uploadLogo($request);
        }
        $this->sectionService->updateSection($data,$section_id);
        return back();
    }

    public function createSection (AdminSectionRequest $request){
        $data = $request->all();
        if (isset($request->file) && $request != null){
            $data['file'] = $this->sectionService->uploadLogo($request);
        }
        $this->sectionService->createSection($data);
        return back();
    }

    public function updateType (Request $request,$type_id){
        $data = $request->all();
        $this->typeService->updateType($data,$type_id);
        return back();
    }

    public function deleteSection ($section_id){
        $this->sectionService->deleteSection($section_id);
        return back();
    }

}
