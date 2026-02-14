<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $table = 'blog_posts';

    protected $fillable = [
        'title',
        'slug',
        'category',

        'short_description',
        'content',

        'featured_image',
        'author_name',
        'author_image',

        'publish_date',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'publish_date' => 'date',
        'is_featured'  => 'boolean',
        'created_at'   => 'datetime',
        'updated_at'   => 'datetime',
    ];

    public $timestamps = true;

    /*
    |--------------------------------------------------------------------------
    | Scope: Published Posts
    |--------------------------------------------------------------------------
    */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /*
    |--------------------------------------------------------------------------
    | Scope: Featured Posts
    |--------------------------------------------------------------------------
    */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /*
    |--------------------------------------------------------------------------
    | Auto Generate Slug If Not Provided
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug) && !empty($post->title)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: Get Featured Image URL
    |--------------------------------------------------------------------------
    */
    public function getFeaturedImageUrlAttribute()
    {
        return $this->featured_image
            ? asset($this->featured_image)
            : asset('assets/img/default-blog.jpg');
    }
}
