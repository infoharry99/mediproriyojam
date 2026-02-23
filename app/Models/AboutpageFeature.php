<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutpageFeature extends Model
{
    protected $table = 'aboutpage_features';

    protected $fillable = [
        'icon',
        'title',
        'description',
        'sort_order',
    ];

    public $timestamps = true;

    protected $casts = [
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}