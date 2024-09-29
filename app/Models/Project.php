<?php

namespace App\Models;

use App\Interfaces\HasUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model implements HasUrl
{
    use HasFactory;

    protected $guarded = [];

    public function getUrl(): string
    {
        return route('project', $this->slug);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'project_service');
    }
}
