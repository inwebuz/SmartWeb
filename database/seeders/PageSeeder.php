<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'title' => 'Bosh sahifa',
            'slug' => '',
            'status' => 1,
            'important' => 1,
            'meta_title' => 'SmartWeb - sayt, telegram bot yaratish xizmatlari',
            'meta_description' => 'Toshkentda, O\'zbekistonda internet magazinlar, korporativ saytlar, landing va telegram bot yaratish xizmatlari, CRM, ERP tizimlar',
        ]);

        Page::create([
            'title' => 'Xizmatlar',
            'slug' => 'xizmatlar',
            'status' => 1,
            'important' => 1,
            'meta_title' => 'Bizning xizmatlar - saytlar, telegram botlar yaratish',
            'meta_description' => 'Turli ko\'rinishdagi saytlar va telegram botlar yaratish xizmatlari',
        ]);

        Page::create([
            'title' => 'Loyihalar',
            'slug' => 'loyihalar',
            'status' => 1,
            'important' => 1,
            'meta_title' => 'SmartWeb - amalga oshirilgan loyihalar',
            'meta_description' => 'Biz tomondan amalga oshirilgan loyihalar ro\'yxati - landing page, korporativ saytlar, kataloglar, internet magazinlar, CRM, ERP tizimlar, telegram botlar',
        ]);
    }
}
