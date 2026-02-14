<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppDownload extends Model
{
    protected $table = 'app_downloads';

    protected $fillable = [
        'app_name',
        'qr_android',
        'qr_ios',
        'android_link',
        'ios_link',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Active App
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Android QR URL
    |--------------------------------------------------------------------------
    */
    public function getQrAndroidUrlAttribute()
    {
        return $this->qr_android
            ? asset($this->qr_android)
            : null;
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: iOS QR URL
    |--------------------------------------------------------------------------
    */
    public function getQrIosUrlAttribute()
    {
        return $this->qr_ios
            ? asset($this->qr_ios)
            : null;
    }
}
