<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Sayt yaratish',
            'slug' => 'sayt-yaratish',
            'status' => 1,
            'parent_id' => null,
            'meta_title' => 'Sayt yaratish xizmati',
            'order' => 1,
        ]);

        Service::create([
            'title' => 'Telegram bot yaratish',
            'slug' => 'telegram-bot-yaratish',
            'status' => 1,
            'parent_id' => null,
            'meta_title' => 'Telegram bot yaratish xizmati',
            'order' => 2,
        ]);
    }
}
