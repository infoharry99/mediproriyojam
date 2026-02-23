<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutpageFounder extends Model
{
    protected $table = 'aboutpage_founder';

    protected $fillable = [
        'image',
        'content',
        'name',
        'role',
        'avatar',
    ];

    public $timestamps = true;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}