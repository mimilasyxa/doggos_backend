<?php

namespace App\Services\SettingsService\DTO;

class MainPageSettingsDTO implements PageSettingsDTO
{
    public function __construct(private readonly string $title, private readonly string $description)
    {
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

}
