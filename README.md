<p align="center">
<img src="https://github.com/the-3labs-team/nova-google-analytics-cards/raw/HEAD/art/banner.png" width="100%" 
alt="Logo Nova Google Analytics Cards by The3LabsTeam"></p>

# nova-google-analytics-cards

## Installation

You can install the package via composer:
```bash
composer require the-3labs-team/google-analytics-cards
```

You can publish the config file with:

```bash
php artisan vendor:publish
```
and choose: `The3LabsTeam\NovaGoogleAnalyticsCards\NovaGoogleAnalyticsCardsServiceProvider`.

You can publish the Google Analytics config file with:
```bash
php artisan vendor:publish
```
**and select: `Spatie\Analytics\AnalyticsServiceProvider`.**

**Note:** this package uses [Laravel GitHub](https://github.com/spatie/laravel-analytics), so you need to configure it
in your `config/analytics.php` file.

**The config file is documented, so choose the option that best suits your needs.**

## Usage

```php
use The3LabsTeam\NovaGoogleAnalyticsCards\ActiveUsersCounter;
use The3LabsTeam\NovaGoogleAnalyticsCards\NewUsersCounter;
use The3LabsTeam\NovaGoogleAnalyticsCards\PageViewsCounter;

use The3LabsTeam\NovaGoogleAnalyticsCards\PageViewLineChart;
...

(new ActiveUsersCounter())
(new NewUsersCounter())
(new PageViewsCounter())
            
(new PageViewLineChart())

```
You can also override the name of cards like this:
```php
use The3LabsTeam\NovaGoogleAnalyticsCards\ActiveUsersCounter;
...

(new ActiveUsersCounter(name: 'The name of the card (string)'))


```

