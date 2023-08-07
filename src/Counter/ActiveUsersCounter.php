<?php

namespace The3LabsTeam\NovaGoogleAnalyticsCards\Counter;

use The3LabsTeam\NovaGoogleAnalyticsCards\Abstract\GoogleAnalyticsCounter;

final class ActiveUsersCounter extends GoogleAnalyticsCounter
{

    protected $title = 'novaGoogleAnalyticsCards.activeUsersCounterTitle';

    protected $metrics = 'activeUsers';
}
