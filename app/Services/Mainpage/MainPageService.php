<?php

namespace App\Services\Mainpage;

use App\Models\News\News;
use App\Services\Mainpage\DTO\MainPageDTO;
use App\Services\SettingsService\SettingsService;

class MainPageService
{
    public const MAIN_PAGE = 'main_page';
    public function __construct(protected SettingsService $settingsServer)
    {
    }

    /**
     * @return MainPageDTO
     */
    public function get(): MainPageDTO
    {
        $settings = $this->settingsServer->getPageSettings(self::MAIN_PAGE);
        $news = News::query()
            ->get();
        return new MainPageDTO($settings, $news);
    }
}
