<?php

namespace App\Models;

use App\Interfaces\HasUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model implements HasUrl
{
    use HasFactory;

    protected $guarded = [];

    public function getUrl(): string
    {
        return route('service', $this->slug);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_service');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Service::class, 'parent_id');
    }
}
