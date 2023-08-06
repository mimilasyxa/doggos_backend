<?php

namespace App\Services\SettingsService\PagesSettings;

use App\Services\SettingsService\DTO\PageSettingsDTO;

interface PageSettings
{
    public function get(): PageSettingsDTO;
}
