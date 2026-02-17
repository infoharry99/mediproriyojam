<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopRanker extends Model
{
    protected $table = 'top_rankers';

    protected $fillable = [
        'name',
        'image',
        'badge_text',
        'description',
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
    | Scope: Only Active Rankers
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
