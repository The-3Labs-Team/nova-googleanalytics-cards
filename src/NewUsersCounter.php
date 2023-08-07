<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;
use Laravel\Nova\Nova;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class NewUsersCounter extends GoogleAnalyticsCounter
{
    public $name;
    public $title = "novaGoogleAnalyticsCards.newUsersCounterTitle";
    protected $defaultMetrics = 'newUsers';


    /**
     * Calculate the value of the metric.
     *
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $results = $this->getData($request, $this->defaultMetrics);

        return $this->result($results)->format('000');
    }
}
