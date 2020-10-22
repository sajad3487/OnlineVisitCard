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
        $data = $this->landingLogService->getMonthData($months,$landing_id);
        return Chartisan::build()
            ->labels($months)
            ->dataset('Page View', $data);
//            ->dataset('Sample 2', [3, 2, 1]);
    }
}
