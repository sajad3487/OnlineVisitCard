<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Modules\Card\Http\Service\LandingLogService;

class YearChart extends BaseChart
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
        $months = $this->landingLogService->getMonthLabel(12);
        $dataVisit = $this->landingLogService->getMonthData($months,$landing_id,"click");
        $dataDownload = $this->landingLogService->getMonthData($months,$landing_id,"download");
        $dataWorkWeb = $this->landingLogService->getMonthData($months,$landing_id,"work_website");
        $dataPersonalWeb = $this->landingLogService->getMonthData($months,$landing_id,"personal_website");
        $dataFacebook = $this->landingLogService->getMonthData($months,$landing_id,"facebook");
        $dataTwitter = $this->landingLogService->getMonthData($months,$landing_id,"twitter");
        $datalinkdin = $this->landingLogService->getMonthData($months,$landing_id,"linkedin");
        $dataSkype = $this->landingLogService->getMonthData($months,$landing_id,"skype");
        $dataWhatsapp = $this->landingLogService->getMonthData($months,$landing_id,"whatsapp");
        $dataInstagram = $this->landingLogService->getMonthData($months,$landing_id,"instagram");
        return Chartisan::build()
            ->labels($months)
            ->dataset('Page View', $dataVisit)
            ->dataset('Add Contact', $dataDownload)
            ->dataset('Work Website', $dataWorkWeb)
            ->dataset('Personal Website', $dataPersonalWeb)
            ->dataset('Facebook', $dataFacebook)
            ->dataset('Twitter', $dataTwitter)
            ->dataset('Linkedin', $datalinkdin)
            ->dataset('Skype', $dataSkype)
            ->dataset('WhatsApp', $dataWhatsapp)
            ->dataset('Instagram', $dataInstagram);
    }
}
