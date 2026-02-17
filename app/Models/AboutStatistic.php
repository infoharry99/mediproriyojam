<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutStatistic extends Model
{
    protected $table = 'about_statistics';

    protected $fillable = [
        'number',
        'label',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $timestamps = true;
}
