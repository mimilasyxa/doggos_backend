<?php

namespace App\Http\Controllers\Dogs;

use App\Services\Dogs\DogsPageService;
use Illuminate\Contracts\View\View;

class DogsController
{
    public function getDogs($gender,DogsPageService $pageService): View
    {
        $dogsByGender = $pageService->getDogsPage($gender);

        return view('pages.dogs', [
            'gender' => $gender,
            'dogs' => $dogsByGender
        ]);
    }

    public function getMemorial(DogsPageService $dogsService)
    {
        $dogsMemorialDTO = $dogsService->getMemorialPage();

        return view('pages.dogs-memorial', [
            'settings' => $dogsMemorialDTO->getSettingsDTO(),
            'dogs' => $dogsMemorialDTO->getDogs()
        ]);
    }
}
