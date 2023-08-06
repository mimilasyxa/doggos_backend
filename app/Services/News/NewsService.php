<?php

namespace App\Services\News;

use App\Models\News\News;

class NewsService
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getNews(): \Illuminate\Database\Eloquent\Builder
    {
        return News::query()
            ->orderByDesc('id');
    }
}
