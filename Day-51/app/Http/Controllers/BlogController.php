<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blog;
    private $blogs;
    private $categories;

    public function index()
    {

        $this->categories = Category::all();
        return view('admin.blog.add', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('message', 'Blog Created Successfully..');
    }

    public function manage()
    {
        $this->blogs = Blog::orderby('id', 'desc')->get();
        return view('admin.blog.manage', ['blogs' => $this->blogs]);
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('admin.blog.edit', ['blog' => $this->blog ]);
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function delete($id)
    {
        return $id;
    }




}
