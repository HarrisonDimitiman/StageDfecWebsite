<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogCategories = BlogCategories::get();
        return view('adminBase.blogCategories.index', compact('blogCategories'));
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
            'category_name' => 'required|unique:blog_categories',
        ]);
        $category = new BlogCategories;
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->back()->with('success','Blog Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogCategories $blogCategories)
    {
        return $blogCategories;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogCategories $blogCategories, $category_id)
    {
        $getCategory = BlogCategories::where('id', $category_id)->first();
        return view('adminBase.blogCategories._editCategory', compact('getCategory'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategories $blogCategories, $category_id)
    {
        $getCategory = BlogCategories::where('id', $category_id)->first();

        if($getCategory->category_name != $request->category_name)
        {
            $this->validate($request, [
                'category_name' => 'required|unique:blog_categories',
            ]);
            $category = $getCategory;
            $category->category_name = $request->category_name;
            $category->update();
    
            return redirect()->back()->with('success','Blog Category Updated Successfully');
        }
        else
        {
            $category = $getCategory;
            $category->category_name = $request->category_name;
            $category->update();
    
            return redirect()->back()->with('success','Blog Category Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategories $blogCategories, $category_id)
    {
        $getCategory = BlogCategories::where('id', $category_id)->first();
        $getCategory->delete();
        return redirect()->back()->with('success','Blog Category Deleted Successfully');
    }
}
