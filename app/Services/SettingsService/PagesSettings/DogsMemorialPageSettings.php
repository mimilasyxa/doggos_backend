<?php

namespace App\Services\SettingsService\PagesSettings;

use App\Models\Settings\Settings;
use App\Services\SettingsService\DTO\DogsMemorialPageSettingsDTO;
use App\Services\SettingsService\DTO\PageSettingsDTO;

class DogsMemorialPageSettings implements PageSettings
{
    public function get(): PageSettingsDTO
    {
        $text =  Settings::getSettingByCode(Settings::MEMORIAL_PAGE_TEXT)->getValue();

        return new DogsMemorialPageSettingsDTO($text);
    }
}
