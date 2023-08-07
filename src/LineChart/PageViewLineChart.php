<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\LineChart;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsLineChart;

class PageViewLineChart extends GoogleAnalyticsLineChart
{
    public $title = 'novaGoogleAnalyticsCards.pageViewsLineChartTitle';

    protected $metrics = 'screenPageViews';
}
