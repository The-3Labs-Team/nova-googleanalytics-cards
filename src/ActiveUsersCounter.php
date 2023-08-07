<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;
use Laravel\Nova\Nova;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class ActiveUsersCounter extends GoogleAnalyticsCounter
{
    public $name;
    protected $title = 'novaGoogleAnalyticsCards.activeUsersCounterTitle';

    protected $metrics = 'activeUsers';


    /**
     * Calculate the value of the metric.
     *
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $results = $this->getData($request, $this->metrics);

        return $this->result($results)->format('000');
    }
}
