<?php

namespace App\Services\Mainpage\DTO;

use App\Services\SettingsService\DTO\MainPageSettingsDTO;
use Illuminate\Database\Eloquent\Collection;

class MainPageDTO
{
    public function __construct(private readonly MainPageSettingsDTO $mainPageSettingsDTO, private readonly Collection $news)
    {
    }

    /**
     * @return MainPageSettingsDTO
     */
    public function getMainPageSettingsDTO(): MainPageSettingsDTO
    {
        return $this->mainPageSettingsDTO;
    }

    /**
     * @return Collection
     */
    public function getNews(): Collection
    {
        return $this->news;
    }

}
