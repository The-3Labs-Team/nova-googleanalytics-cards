<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Counter;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class NewUsersCounter extends GoogleAnalyticsCounter
{
    public $title = 'novaGoogleAnalyticsCards.newUsersCounterTitle';

    protected $metrics = 'newUsers';
}
