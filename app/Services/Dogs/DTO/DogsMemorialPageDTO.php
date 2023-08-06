<?php

namespace App\Services\Dogs\DTO;

use App\Services\SettingsService\DTO\PageSettingsDTO;
use Illuminate\Database\Eloquent\Collection;

class DogsMemorialPageDTO
{
    public function __construct(private ?Collection $dogs, private PageSettingsDTO $settingsDTO)
    {
    }

    /**
     * @return Collection|null
     */
    public function getDogs(): ?Collection
    {
        return $this->dogs;
    }

    /**
     * @return PageSettingsDTO
     */
    public function getSettingsDTO(): PageSettingsDTO
    {
        return $this->settingsDTO;
    }

}
