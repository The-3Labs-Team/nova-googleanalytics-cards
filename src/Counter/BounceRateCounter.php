<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Counter;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

class BounceRateCounter extends GoogleAnalyticsCounter
{
    public $title = 'novaGoogleAnalyticsCards.bounceRateCounterTitle';

    protected $metrics = 'bounceRate';
}
