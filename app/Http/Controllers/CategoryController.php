<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ActivityLog;
use Session;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    function index(){
        $categories=Category::latest('id')->paginate(10);
        $page="categories";
        return view('categories.index',compact('categories','page'));
    }
    function show($id){
        $category=Category::find($id);
        $page="categories";
        return view('categories.show',compact('category','page'));
    }
    function create(){
        $page="categories";
        $data=[
            'page'=>$page
        ];
        return view('categories.create',compact('page'));
    }
    function store(CategoryRequest $request){

        Category::create($request->all());
        // $category=new Category();
        // $category->name=$request->name;
        // $category->description=$request->description;
        // $category->save();
        $activity=new ActivityLog();
        $activity->table="category";
        $activity->description="new category added";
        $activity->save();
        Session::put('success','Category data is saved');
        return redirect()->route('categories.index');
    }
    function destroy($id){
        Category::find($id)->delete();
        $activity=new ActivityLog();
        $activity->table="category";
        $activity->description="category deleted";
        $activity->save();
        Session::put('success','Category data is deleted');
        return redirect()->route('categories.index');
    }
    function edit($id){
        $category=Category::find($id);
        $page="categories";
        return view('categories.edit',compact('category','page'));
    }
    function update(CategoryRequest $request, Category $category){
        $category->update($request->all());
        // $category=Category::find($id);
        // $category->name=$request->name;
        // $category->description=$request->description;
        // $category->save();
        Session::put('success','Category data is updated');
        $activity=new ActivityLog();
        $activity->table="category";
        $activity->description="new category added";
        $activity->save();
        return redirect()->route('categories.index');
    }
}
