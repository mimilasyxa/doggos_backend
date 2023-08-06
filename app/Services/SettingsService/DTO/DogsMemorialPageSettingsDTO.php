<?php

namespace App\Services\SettingsService\DTO;

class DogsMemorialPageSettingsDTO implements PageSettingsDTO
{
    public function __construct(private string $text)
    {
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}
