<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Counter;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class PageViewsCounter extends GoogleAnalyticsCounter
{
    protected $title = 'nova-google-analytics-cards::messages.pageViewsCounterTitle';

    protected $metrics = 'screenPageViews';
}
