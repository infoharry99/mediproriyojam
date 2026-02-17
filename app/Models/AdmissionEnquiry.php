<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    protected $table = 'admission_enquiries';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'course',
        'city',
        'query',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: New Enquiries
    |--------------------------------------------------------------------------
    */
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    /*
    |--------------------------------------------------------------------------
    | Scope: Contacted Enquiries
    |--------------------------------------------------------------------------
    */
    public function scopeContacted($query)
    {
        return $query->where('status', 'contacted');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Full Name
    |--------------------------------------------------------------------------
    */
    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }
}
