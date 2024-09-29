<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    const TYPE_TEXT = 1;
    const TYPE_TEXTAREA = 2;
    const TYPE_HTML = 3;
    const TYPE_IMAGE = 4;
    const TYPE_FILE = 5;

    protected $guarded = [];
}
