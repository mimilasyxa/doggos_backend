<?php

namespace App\Http\Controllers\MainPage;

use App\Services\Mainpage\MainPageService;

class MainPageController
{
    public function getPage(MainPageService $pageService)
    {
        $mainPageDTO = $pageService->get();

        return view('welcome', [
            'news' => $mainPageDTO->getNews(),
            'settings' => $mainPageDTO->getMainPageSettingsDTO()]);
    }
}
