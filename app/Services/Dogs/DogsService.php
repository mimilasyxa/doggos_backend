<?php

namespace App\Services\Dogs;

use App\Models\Dog\Dog;
use Illuminate\Database\Eloquent\Collection;

class DogsService
{
    /**
     * @param string $gender
     * @return Collection
     */
    public function getByGender(string $gender): Collection
    {
        return Dog::query()
            ->where('gender', Dog::GENDERS[$gender])
            ->whereNull('death_date')
            ->get();
    }

    /**
     * @return Collection
     */
    public function getMemorial(): Collection
    {
        return Dog::query()
            ->whereNotNull('death_date')
            ->get();
    }
}
