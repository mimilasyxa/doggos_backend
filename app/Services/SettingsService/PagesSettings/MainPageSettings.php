<?php

namespace App\Services\SettingsService\PagesSettings;

use App\Models\Settings\Settings;
use App\Services\SettingsService\DTO\MainPageSettingsDTO;
use App\Services\SettingsService\DTO\PageSettingsDTO;

class MainPageSettings implements PageSettings
{
    public function get(): PageSettingsDTO
    {
        $title = Settings::getSettingByCode(Settings::HOME_INFO_TITLE)->getValue();
        $description = Settings::getSettingByCode(Settings::HOME_INFO_DESCRIPTION)->getValue();

        return new MainPageSettingsDTO($title, $description);
    }
}
