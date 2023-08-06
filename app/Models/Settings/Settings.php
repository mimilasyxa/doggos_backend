<?php

namespace App\Models\Settings;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Settings extends Model
{
    use HasFactory;

    const HEADER_IMAGE = 'header_image';
    const HOME_INFO_TITLE = 'home_info_title';
    const HOME_INFO_DESCRIPTION = 'home_info_description';
    const MEMORIAL_PAGE_TEXT = 'memorial_page_text';
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    /**
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * @param string $code
     * @return Settings
     */
    public static function getSettingByCode(string $code): Settings
    {
        /** @var Settings $setting */
        $setting = self::query()
            ->where('code', $code)
            ->first();

        return $setting;
    }
}
