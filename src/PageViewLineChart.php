<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards;

use Carbon\Carbon;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;
use Laravel\Nova\Nova;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\OrderBy;
use Spatie\Analytics\Period;
use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsLineChart;


class PageViewLineChart extends GoogleAnalyticsLineChart
{
    public $name;
    protected $title = 'novaGoogleAnalyticsCards.pageViewsLineChartTitle';
    protected $metrics = 'screenPageViews';

    /**
     * Calculate the value of the metric.
     *
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {

        [$total, $data] = $this->getAnalyticsData(numberOfDays: $request->range, metrics: $this->metrics);

        return $this->result($total) // total values
            ->trend($data) // dates => value
            ->format('0,0');
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'g-a4-page-view-line-chart';
    }
}
