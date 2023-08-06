<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Services\News\NewsService;
use App\Services\SettingsService\SettingsService;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public const ITEMS_ON_PAGE = 15;
    public function getPage(NewsService $settingsService)
    {
        $news = $settingsService->getNews();
        return view('pages.news',
        [
            'news' => $news->simplePaginate(self::ITEMS_ON_PAGE)
        ]);
    }

    public function getOnePage(string|int $slug)
    {
        dd($slug);
    }
}
