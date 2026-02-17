<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    protected $table = 'test_types';

    protected $fillable = [
        'title',
        'short_description',
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
    | Scope: Active Test Types
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Icon URL (if storing image path)
    |--------------------------------------------------------------------------
    */
    public function getIconUrlAttribute()
    {
        if (!$this->icon) {
            return null;
        }

        // If icon is image path
        if (str_contains($this->icon, '/')) {
            return asset($this->icon);
        }

        // If icon is just name (like "check" or "clipboard")
        return $this->icon;
    }
}
