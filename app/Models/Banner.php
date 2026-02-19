<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{  
    protected $table = 'banners';

    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
        'status',
        'is_mobile'
    ];

    protected $casts = [
        'status'     => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
