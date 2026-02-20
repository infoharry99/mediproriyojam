<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog-posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug',
            'category' => 'nullable|string|max:150',

            'short_description' => 'nullable|string',
            'content' => 'nullable|string',

            'featured_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'author_name' => 'nullable|string|max:150',
            'author_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',

            'publish_date' => 'nullable|date',
            'status' => 'required|in:draft,published',
            'is_featured' => 'nullable|boolean',
        ]);

        $featuredImagePath = null;
        $authorImagePath = null;

        if ($request->hasFile('featured_image')) {
            $name = time().'_featured.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('uploads/blogs'), $name);
            $featuredImagePath = 'uploads/blogs/'.$name;
        }

        if ($request->hasFile('author_image')) {
            $name = time().'_author.'.$request->author_image->extension();
            $request->author_image->move(public_path('uploads/blogs'), $name);
            $authorImagePath = 'uploads/blogs/'.$name;
        }

        BlogPost::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'featured_image' => $featuredImagePath,
            'author_name' => $request->author_name,
            'author_image' => $authorImagePath,
            'publish_date' => $request->publish_date,
            'status' => $request->status,
            'is_featured' => $request->is_featured ?? false,
        ]);

        return back()->with('success', 'Blog post created successfully');
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug,' . $id,
            'category' => 'nullable|string|max:150',

            'short_description' => 'nullable|string',
            'content' => 'nullable|string',

            'featured_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'author_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',

            'publish_date' => 'nullable|date',
            'status' => 'required|in:draft,published',
            'is_featured' => 'nullable|boolean',
        ]);

        if ($request->hasFile('featured_image')) {
            if ($post->featured_image && File::exists(public_path($post->featured_image))) {
                File::delete(public_path($post->featured_image));
            }

            $name = time().'_featured.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('uploads/blogs'), $name);
            $post->featured_image = 'uploads/blogs/'.$name;
        }

        if ($request->hasFile('author_image')) {
            if ($post->author_image && File::exists(public_path($post->author_image))) {
                File::delete(public_path($post->author_image));
            }

            $name = time().'_author.'.$request->author_image->extension();
            $request->author_image->move(public_path('uploads/blogs'), $name);
            $post->author_image = 'uploads/blogs/'.$name;
        }

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'publish_date' => $request->publish_date,
            'status' => $request->status,
            'is_featured' => $request->is_featured ?? false,
        ]);

        return back()->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);

        if ($post->featured_image && File::exists(public_path($post->featured_image))) {
            File::delete(public_path($post->featured_image));
        }

        if ($post->author_image && File::exists(public_path($post->author_image))) {
            File::delete(public_path($post->author_image));
        }

        $post->delete();

        return back()->with('success', 'Blog deleted successfully');
    }
    // FRONT BLOG LISTING
public function publicIndex()
{
    $featuredPost = BlogPost::where('status', 'published')
        ->where('is_featured', 1)
        ->latest()
        ->first();

    $posts = BlogPost::where('status', 'published')
        ->latest()
        ->paginate(9);

    return view('blog', compact('posts', 'featuredPost'));
}


// BLOG DETAILS PAGE
public function show($slug)
{
    $post = BlogPost::where('slug', $slug)
        ->where('status', 'published')
        ->firstOrFail();

    $relatedPosts = BlogPost::where('status', 'published')
        ->where('id', '!=', $post->id)
        ->latest()
        ->take(3)
        ->get();

         $testimonials = Testimonial::where('status', 'active')
            ->orderBy('display_order')
            ->get();

    return view('innerblog', compact('post', 'relatedPosts','testimonials'));
}
}
