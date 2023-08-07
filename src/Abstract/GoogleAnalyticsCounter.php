<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Abstract;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;
use Laravel\Nova\Nova;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

abstract class GoogleAnalyticsCounter extends Value
{
    public function __construct(string $name = null)
    {
        parent::__construct();
        $this->name = $name ?? __($this->title);
    }

    /**
     * Return data from Google Analytics API
     */
    public function getData(NovaRequest $request, string $metrics): mixed
    {
        $analyticsData = Analytics::get(Period::days($request->range), [$metrics]);
        $results = $analyticsData[0][$metrics];

        return $results;
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            7 => Nova::__('7 Days'),
            30 => Nova::__('30 Days'),
            60 => Nova::__('60 Days'),
            365 => Nova::__('365 Days'),
            'MTD' => Nova::__('Month To Date'),
            'QTD' => Nova::__('Quarter To Date'),
            'YTD' => Nova::__('Year To Date'),
        ];
    }

    /**
     * Determine the amount of time the results of the metric should be cached.
     *
     * @return \DateTimeInterface|\DateInterval|float|int|null
     */
    public function cacheFor()
    {
        return now()->addMinutes(config('nova-google-analytics-cards.cache_ttl'));
    }
}
