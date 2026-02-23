<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutpageStat extends Model
{
    protected $table = 'aboutpage_stats';

    protected $fillable = [
        'number',
        'label',
        'badge_enabled',
        'sort_order',
    ];

    public $timestamps = true;

    protected $casts = [
        'badge_enabled' => 'boolean',
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}