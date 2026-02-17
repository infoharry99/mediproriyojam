<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseDescription extends Model
{
    protected $table = 'course_descriptions';

    protected $fillable = [
        'title',
        'short_label',
        'description',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Active Description
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
