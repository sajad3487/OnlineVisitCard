<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Card\Http\Service\TypeService;
use Modules\Page\Http\Service\SectionService;

class PageController extends Controller
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
        return view('home',compact('slider','wwdheader','wwd1','wwd2','wwd3','wwd4','testimonial_header','testimonials','price_header','type1','type2','type3','type4','type5','type6','contact','info'));
    }
}
