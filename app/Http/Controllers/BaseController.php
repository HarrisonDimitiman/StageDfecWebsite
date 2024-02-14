<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog, BlogCategories, CustomizationLCD, SliderImage};

class BaseController extends Controller
{
    public function blog() 
    {
        $lcd = CustomizationLCD::where('id', '1')->first();
        $blog = Blog::join('users', 'users.id', 'blogs.user_id')
            ->join('blog_categories', 'blog_categories.id', 'blogs.blog_category_id')
            ->select('blogs.id', 'users.name', 'blog_categories.category_name', 'blogs.title', 'blogs.content', 'blogs.image', 'blogs.created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        $blogLastPage = $blog->lastPage();
        $activePageNumber = $blog->currentPage();

        $slider = SliderImage::get();

        $recentPost = Blog::join('users', 'users.id', 'blogs.user_id')
            ->join('blog_categories', 'blog_categories.id', 'blogs.blog_category_id')
            ->select('blogs.id', 'users.name', 'blog_categories.category_name', 'blogs.title', 'blogs.content', 'blogs.image', 'blogs.created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(6);



        $category = BlogCategories::get();
        return view('base.blog2', compact('blog', 'category', 'recentPost', 'blogLastPage', 'activePageNumber', 'lcd', 'slider'));
    }

    public function index()
    {
        $lcd = CustomizationLCD::where('id', '1')->first();
        $slider = SliderImage::get();
        $blog = Blog::join('users', 'users.id', 'blogs.user_id')
            ->join('blog_categories', 'blog_categories.id', 'blogs.blog_category_id')
            ->select('blogs.id', 'users.name', 'blog_categories.category_name', 'blogs.title', 'blogs.content', 'blogs.image', 'blogs.created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(2);


        
        return view('welcome2', compact('lcd', 'blog', 'slider'));
    }


}
