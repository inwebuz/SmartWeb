<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key' => 'sitename',
            'value' => 'SmartWeb',
            'type' => Setting::TYPE_TEXT,
            'hidden' => 0,
        ]);

        Setting::create([
            'key' => 'email',
            'value' => 'info@smartweb.uz',
            'type' => Setting::TYPE_TEXT,
            'hidden' => 0,
        ]);

        Setting::create([
            'key' => 'phone',
            'value' => '+998 33 901-03-33',
            'type' => Setting::TYPE_TEXT,
            'hidden' => 0,
        ]);

        Setting::create([
            'key' => 'address',
            'value' => 'Toshkent, O\'zbekiston',
            'type' => Setting::TYPE_TEXTAREA,
            'hidden' => 0,
        ]);

        Setting::create([
            'key' => 'head_codes',
            'value' => '',
            'type' => Setting::TYPE_TEXTAREA,
            'hidden' => 0,
        ]);

        Setting::create([
            'key' => 'body_start_codes',
            'value' => '',
            'type' => Setting::TYPE_TEXTAREA,
            'hidden' => 0,
        ]);

        Setting::create([
            'key' => 'body_end_codes',
            'value' => '',
            'type' => Setting::TYPE_TEXTAREA,
            'hidden' => 0,
        ]);
    }
}
