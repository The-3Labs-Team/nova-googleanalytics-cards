<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Counter;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class NewUsersCounter extends GoogleAnalyticsCounter
{
    public $title = 'nova-google-analytics-cards::messages.newUsersCounterTitle';

    protected $metrics = 'newUsers';
}
