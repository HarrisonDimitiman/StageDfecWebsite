<?php

namespace App\Http\Controllers;

use App\Models\{Blog, BlogCategories, User};
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $blogs = Blog::join('users', 'users.id', 'blogs.user_id')
            ->join('blog_categories', 'blog_categories.id', 'blogs.blog_category_id')
            ->select('blogs.id', 'users.name', 'blog_categories.category_name', 'blogs.title', 'blogs.content', 'blogs.image')
            ->get();
        $category = BlogCategories::get();
        return view('adminBase.blog.index', compact('blogs', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs',
        ]);
        $blog = new Blog;
        $blog->user_id = Auth::user()->id;
        $blog->blog_category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->content = $request->content;

        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/blogImage', $picture);
            $blog->image = $url;  
        }
        $blog->save();
        // return $blog;
        

        return redirect()->back()->with('success','Blog Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $category = BlogCategories::get();
        return view('adminBase.blog._editBlog', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        if ($blog->title != $request->title)
        {
            $this->validate($request, [
                'title' => 'required|unique:blogs',
            ]);

            $blog->user_id = Auth::user()->id;
            $blog->blog_category_id = $request->category_id;
            $blog->title = $request->title;
            $blog->content = $request->content;
    
            if( $request->file('image') != null){
                $picture = $request->file('image');
                $fileName = time() . '.' . $picture->getClientOriginalExtension();
                $img = Image::make($picture->getRealPath());
                $img->stream();
                $url = Storage::disk('public')->put('uploads/blogImage', $picture);
                $blog->image = $url;  
            }
            $blog->update();
            // return $blog;
            
    
            return redirect()->back()->with('success','Blog Category Created Successfully');
        }
        else
        {
            $blog->user_id = Auth::user()->id;
            $blog->blog_category_id = $request->category_id;
            $blog->title = $request->title;
            $blog->content = $request->content;
    
            if( $request->file('image') != null){
                $picture = $request->file('image');
                $fileName = time() . '.' . $picture->getClientOriginalExtension();
                $img = Image::make($picture->getRealPath());
                $img->stream();
                $url = Storage::disk('public')->put('uploads/blogImage', $picture);
                $blog->image = $url;  
            }
            $blog->update();
            // return $blog;
            
    
            return redirect()->back()->with('success','Blog Category Created Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success','Blog Category Deleted Successfully');
    }
}
