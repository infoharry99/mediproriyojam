<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutpageIntro extends Model
{
    protected $table = 'aboutpage_intro';

    protected $fillable = [
        'title',
        'banner_image',
        'content'
    ];

    public $timestamps = true;
}