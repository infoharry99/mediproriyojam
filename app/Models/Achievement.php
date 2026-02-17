<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements';

    protected $fillable = [
        'title',
        'year',
        'description',
        'badge_image',
        'display_order',
        'status',
    ];

    protected $casts = [
        'year'          => 'integer',
        'display_order' => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Active Achievements
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Badge Image URL
    |--------------------------------------------------------------------------
    */
    public function getBadgeImageUrlAttribute()
    {
        return $this->badge_image
            ? asset($this->badge_image)
            : null;
    }
}
