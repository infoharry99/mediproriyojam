<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutpageGallery extends Model
{
    protected $table = 'aboutpage_gallery';

    protected $fillable = [
        'image',
        'title',
        'sort_order',
    ];

    public $timestamps = true;

    protected $casts = [
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}