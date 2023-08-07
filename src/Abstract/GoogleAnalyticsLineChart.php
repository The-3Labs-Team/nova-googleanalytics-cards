<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Abstract;

use Carbon\Carbon;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;
use Laravel\Nova\Nova;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\OrderBy;
use Spatie\Analytics\Period;

abstract class GoogleAnalyticsLineChart extends Trend
{

    public function __construct(string $name = null)
    {
        parent::__construct();
        $this->name = $name ?? __($this->title);
    }

    public function getAnalyticsData(int $numberOfDays, string $metrics): array
    {
        $startDate = Carbon::now()->subDays($numberOfDays);
        $endDate = Carbon::now();
        $orderBy = [
            OrderBy::dimension('date', false),
            OrderBy::metric('screenPageViews', false),
        ];

        $analyticsData = Analytics::get(
            period: Period::create($startDate, $endDate),
            metrics: [$metrics],
            dimensions: ['date'],
            maxResults: $numberOfDays,
            orderBy: $orderBy
        );

        $formattedData = [];
        foreach ($analyticsData as $data) {
            $formattedData[$data['date']->isoFormat('YYYY-MM-DD')] = $data['screenPageViews'];
        }

        $total = array_sum($formattedData);

        return [$total, $formattedData];
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
            //            90 => Nova::__('90 Days'),
        ];
    }

    /**
     * Determine the amount of time the results of the metric should be cached.
     *
     * @return \DateTimeInterface|\DateInterval|float|int|null
     */
    public function cacheFor()
    {
        return now()->addMinutes(5);
    }
}
