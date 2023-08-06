<?php

namespace App\Services\Dogs;

use App\Services\Dogs\DTO\DogsMemorialPageDTO;
use App\Services\SettingsService\SettingsService;
use Illuminate\Database\Eloquent\Collection;

class DogsPageService
{
    public const PAGE_NAME = 'dogs_memorial';
    public function __construct(private readonly DogsService $dogsService, private readonly SettingsService $settingsService)
    {
    }

    public function getMemorialPage(): DogsMemorialPageDTO
    {
        $dogs = $this->dogsService->getMemorial();
        $settings = $this->settingsService->getPageSettings(self::PAGE_NAME);

        return new DogsMemorialPageDTO($dogs, $settings);
    }

    public function getDogsPage(string $gender): Collection
    {
        return $this->dogsService->getByGender($gender);
    }
}
