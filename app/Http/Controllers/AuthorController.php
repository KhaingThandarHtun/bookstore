<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\ActivityLog;
use Session;
use App\Http\Requests\AuthorRequest;
class AuthorController extends Controller
{
    function index(){
        $authors=Author::latest('id')->paginate(10);
        $page="authors";
        return view('authors.index',compact('authors','page'));
    }
    function show($id){
        $author=Author::find($id);
        $page="authors";
        return view('authors.show',compact('author','page'));
    }
    function create()
    {
        $page="authors";
        $data=[
            'page'=>$page,
        ];
        return view('authors.create',$data);
    }
    function store(AuthorRequest $request){
       
        $author=new Author();
        $author->name=$request->name;
        $author->phone_no=$request->phone_no;
        $author->biography=$request->biography;
        if($request->hasFile('profile_image'))
        {
            $profile_image=$request->file('profile_image');
            $name=$profile_image->getClientOriginalName();
            $profile_image->move(public_path().'/uploads/',$name);
            $book->profile_image=$name;
        }
        $author->education_level=$request->educational_level;
        $author->married_status=$request->married_status;
        $author->save();

        Session::put('success','New Author data is saved');

        $activity=new ActivityLog();
        $activity->table="author";
        $activity->description="new author added";
        $activity->save();

        return redirect()->route('authors.index');
    }
    function destroy($id){
        Author::find($id)->delete();
        $activity=new ActivityLog();
        $activity->table="author";
        $activity->description="new author is deleted";
        $activity->save();
        Session::put('success','Author data is deleted');
        return redirect()->route('authors.index');
    }
    function edit($id){
        $author=Author::find($id);
        $page="authors";
        return view('authors.edit',compact('author','page'));
    }
    function update(AuthorRequest $request, Author $author){
        
        
        $author->name=$request->name;
        $author->phone_no=$request->phone_no;
        $author->biography=$request->biography;
        if($request->hasFile('profile_image'))
        {
            $profile_image=$request->file('profile_image');
            $name=$profile_image->getClientOriginalName();
            $profile_image->move(public_path().'/uploads/',$name);
            $book->profile_image=$name;
        }
        else 
        {
            $author->profile_image = NULL;
        }
        $author->education_level=$request->educationa_level;
        $author->married_status=$request->married_status;
        $author->save();
       
        Session::put('success','Author data is updated');

        $activity=new ActivityLog();
        $activity->table="author";
        $activity->description="new author added";
        $activity->save();
        return redirect()->route('authors.index');
    }
}
