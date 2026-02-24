<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementPoster extends Model
{
    protected $table = 'announcements_poster';

    protected $fillable = [
        'poster',
        'is_active',
    ];

    public $timestamps = true;

    protected $casts = [
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}