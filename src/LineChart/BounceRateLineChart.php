<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\LineChart;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsLineChart;

class BounceRateLineChart extends GoogleAnalyticsLineChart
{
    public $title = 'nova-google-analytics-cards::messages.bounceRateLineChartTitle';

    protected $metrics = 'bounceRate';
}
