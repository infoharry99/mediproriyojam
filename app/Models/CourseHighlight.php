<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseHighlight extends Model
{
    protected $table = 'course_highlights';

    protected $fillable = [
        'highlight_text',
        'icon',
        'display_order',
        'status',
    ];

    protected $casts = [
        'display_order' => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Active Highlights
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Default Icon
    |--------------------------------------------------------------------------
    */
    public function getIconAttribute($value)
    {
        return $value ?: 'check';
    }
}
