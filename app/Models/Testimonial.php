<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'image',
        'designation',
        'rating',
        'message',
        'display_order',
        'status',
    ];

    protected $casts = [
        'rating'        => 'integer',
        'display_order' => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Active Testimonials
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Star Rating Array (for frontend loop)
    |--------------------------------------------------------------------------
    */
    public function getStarsAttribute()
    {
        return range(1, $this->rating);
    }
}
