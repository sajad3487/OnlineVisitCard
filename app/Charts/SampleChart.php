<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Modules\Card\Http\Service\LandingLogService;

class SampleChart extends BaseChart
{
    /**
     * @var LandingLogService
     */
    private $landingLogService;

    public function __construct(
        LandingLogService $landingLogService
    )
    {
        $this->landingLogService = $landingLogService;
    }

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $landing_id = $request->get('landing');
        $dates = $this->landingLogService->getLabel(7);
        $dataVisit = $this->landingLogService->getData($dates,$landing_id,"visit");
        $dataWorkWeb = $this->landingLogService->getData($dates,$landing_id,"work_website");
        $dataPersonalWeb = $this->landingLogService->getData($dates,$landing_id,"personal_website");
        $dataFacebook = $this->landingLogService->getData($dates,$landing_id,"facebook");
        $dataTwitter = $this->landingLogService->getData($dates,$landing_id,"twitter");
        $datalinkdin = $this->landingLogService->getData($dates,$landing_id,"linkdin");
        $dataSkype = $this->landingLogService->getData($dates,$landing_id,"skype");
        $dataWhatsapp = $this->landingLogService->getData($dates,$landing_id,"whatsapp");
        $dataInstagram = $this->landingLogService->getData($dates,$landing_id,"instagram");
        return Chartisan::build()
            ->labels($dates)
            ->dataset('Page View', $dataVisit)
            ->dataset('Work Website', $dataWorkWeb)
            ->dataset('Personal Website', $dataPersonalWeb)
            ->dataset('Facebook', $dataFacebook)
            ->dataset('Twitter', $dataTwitter)
            ->dataset('Linkedin', $datalinkdin)
            ->dataset('Skype', $dataSkype)
            ->dataset('WhatsApp', $dataWhatsapp)
            ->dataset('Instagram', $dataInstagram);
//            ->dataset('Sample 2', [3, 2, 1]);
    }
}
