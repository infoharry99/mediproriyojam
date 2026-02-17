<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'title',
        'category',
        'description',
        'image',

        'instructor_name',
        'instructor_image',

        'original_price',
        'discounted_price',

        'rating',
        'total_reviews',

        'total_lessons',
        'total_duration',
        'total_students',

        'status',
    ];

    protected $casts = [
        'original_price'   => 'decimal:2',
        'discounted_price' => 'decimal:2',
        'rating'           => 'float',
        'total_reviews'    => 'integer',
        'total_lessons'    => 'integer',
        'total_students'   => 'integer',
        'created_at'       => 'datetime',
        'updated_at'       => 'datetime',
    ];

    public $timestamps = true;
}
