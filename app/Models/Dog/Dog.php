<?php

namespace App\Models\Dog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int|null $mother_id
 * @property int|null $father_id
 * @property boolean $gender
 * @property string $name
 * @property string|null $photo
 * @property string $birth_date
 * @property string|null $death_date
 * @property-read Dog|null $mother
 * @property-read Dog|null $father
 */
class Dog extends Model
{
    use HasFactory;

    public const MALE = 'male';
    public const FEMALE = 'female';

    public const GENDERS = [
        self::MALE => 0, self::FEMALE => 1
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getMotherId(): ?int
    {
        return $this->mother_id;
    }

    /**
     * @param int|null $mother_id
     */
    public function setMotherId(?int $mother_id): void
    {
        $this->mother_id = $mother_id;
    }

    /**
     * @return int|null
     */
    public function getFatherId(): ?int
    {
        return $this->father_id;
    }

    /**
     * @param int|null $father_id
     */
    public function setFatherId(?int $father_id): void
    {
        $this->father_id = $father_id;
    }

    /**
     * @return bool
     */
    public function isGender(): bool
    {
        return $this->gender;
    }

    /**
     * @param bool $gender
     */
    public function setGender(bool $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    /**
     * @param string|null $photo
     */
    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birth_date;
    }

    /**
     * @param string $birth_date
     */
    public function setBirthDate(string $birth_date): void
    {
        $this->birth_date = $birth_date;
    }

    /**
     * @return string|null
     */
    public function getDeathDate(): ?string
    {
        return $this->death_date;
    }

    /**
     * @param string|null $death_date
     */
    public function setDeathDate(?string $death_date): void
    {
        $this->death_date = $death_date;
    }

    /**
     * @return HasOne
     */
    public function mother(): HasOne
    {
        return $this->hasOne(Dog::class, 'id', 'mother_id');
    }

    /**
     * @return HasOne
     */
    public function father(): HasOne
    {
        return $this->hasOne(Dog::class, 'id', 'father_id');
    }
}
