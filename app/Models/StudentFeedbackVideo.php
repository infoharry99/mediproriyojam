<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFeedbackVideo extends Model
{
    protected $table = 'student_feedback_videos';

    protected $fillable = [
        'student_name',
        'thumbnail_image',
        'video_url',
        'course_name',
        'exam_year',
        'display_order',
        'status',
    ];

    protected $casts = [
        'exam_year'     => 'integer',
        'display_order' => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Only Active Videos
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Check if YouTube URL
    |--------------------------------------------------------------------------
    */
    public function getIsYoutubeAttribute()
    {
        return str_contains($this->video_url, 'youtube') ||
               str_contains($this->video_url, 'youtu.be');
    }
}
