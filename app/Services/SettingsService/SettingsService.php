<?php

namespace App\Services\SettingsService;

use App\Services\Mainpage\MainPageService;
use App\Services\SettingsService\DTO\PageSettingsDTO;
use App\Services\SettingsService\PagesSettings\MainPageSettings;

class SettingsService
{
    public const PAGES_SETTINGS = [
        MainPageService::MAIN_PAGE => MainPageSettings::class
    ];

    public function getPageSettings(string $pageName): PageSettingsDTO
    {
        $pageSettings = new (self::PAGES_SETTINGS[$pageName])();
        return $pageSettings->get();
    }
}
