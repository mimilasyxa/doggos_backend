<?php

namespace Database\Seeders;

use App\Models\Settings\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    const SETTINGS = [
        [
            'code' => Settings::HEADER_IMAGE,
            'value' => 'storage/images/header-logo.png'
        ],
        [
            'code' => Settings::HOME_INFO_TITLE,
            'value' => 'Добро пожаловать на наш сайт!'
        ],
        [
            'code' => Settings::HOME_INFO_DESCRIPTION,
            'value' => 'описание сайта'
        ],
        [
            'code' => Settings::MEMORIAL_PAGE_TEXT,
            'value' => 'текст на странице мемориала'
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->dropTable();

        DB::table('settings')->insert(self::SETTINGS);
    }

    public function dropTable()
    {
        DB::table('settings')->truncate();
    }
}
