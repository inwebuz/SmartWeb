<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class Helper
{
    public static function setting($key)
    {
        return Cache::remember('setting:' . $key, now()->addDay(), function () use ($key) {
            return Setting::where('key', $key)->first()?->value ?? '';
        });
    }

    public static function mainMenu()
    {
        return [
            [
                'title' => 'Bosh sahifa',
                'url' => route('home'),
                'active' => Route::currentRouteName() == 'home',
            ],
            [
                'title' => 'Xizmatlar',
                'url' => route('services'),
                'active' => Route::currentRouteName() == 'services',
            ],
            [
                'title' => 'Portfolio',
                'url' => route('projects'),
                'active' => Route::currentRouteName() == 'projects',
            ],
            [
                'title' => 'Aloqa',
                'url' => route('contacts'),
                'active' => Route::currentRouteName() == 'contacts',
            ],
        ];
    }

    public static function socialLinks()
    {
        return [
            [
                'title' => 'Telegram',
                'url' => 'https://t.me/smartweb_uz',
                'icon' => 'fas fa-paper-plane',
            ],
            [
                'title' => 'Facebook',
                'url' => 'https://www.facebook.com/smartweb.uz/',
                'icon' => 'fab fa-facebook-f',
            ],
            [
                'title' => 'Instagram',
                'url' => 'https://www.instagram.com/smartweb.uz/',
                'icon' => 'fab fa-instagram',
            ],
        ];
    }
}
