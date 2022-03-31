<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $category;
    private $categories;



    public function index(){
        return view('admin.category.add');
    }

    public function create(Request $request){
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category Info Created Successfully..');
    }

    public function manage(){
        $this->categories = Category::orderby('id', 'desc')->get();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function edit($id){
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }

    public function update(Request $request, $id){
        return $request->all();
    }

    public function delete($id){
        return $id;
    }
















}
