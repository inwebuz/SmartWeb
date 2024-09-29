<?php

namespace App\Helpers;

use App\Models\Setting;

class Helper
{
    public static function setting($key)
    {
        return Setting::where('key', $key)->first()?->value ?? '';
    }
}
