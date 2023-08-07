<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Counter;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class PageViewsCounter extends GoogleAnalyticsCounter
{
    protected $title = 'novaGoogleAnalyticsCards.pageViewsCounterTitle';

    protected $metrics = 'screenPageViews';
}
