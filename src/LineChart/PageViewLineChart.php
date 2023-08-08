<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\LineChart;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsLineChart;

class PageViewLineChart extends GoogleAnalyticsLineChart
{
    public $title = 'nova-google-analytics-cards::messages.pageViewsLineChartTitle';

    protected $metrics = 'screenPageViews';
}
