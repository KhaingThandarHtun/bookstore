<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\ActivityLog;
use Session;
use App\Http\Requests\BookRequest;
class BookController extends Controller
{
    
    function index(){
        $books=Book::latest('id')->paginate(10);
        $page='books';
        return view('books.index',compact('books','page'));
    }
    function show($id){
       // return $id;
       $page='books';
       $book=Book::find($id);
        return view('books.show',compact('book','page'));
    }
    public function create()
    {
        $page = "books";
        $data = [
            'page' => $page,
        ];
        return view('books.create',$data);
    }
    function store(BookRequest $request){
        $book=new Book();
        
        $book->name=$request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->category=$request->category;
        $book->publisher=$request->publisher;
        $book->published_date=$request->published_date;
        $book->publishing_time=$request->publishing_time;
        if($request->hasFile('cover_image'))
        {
            $cover_image=$request->file('cover_image');
            $name=$cover_image->getClientOriginalName();
            $cover_image->move(public_path().'/uploads/',$name);
            $book->cover_image=$name;
        }
        $book->price=$request->price;
        $book->qty=$request->qty;
        $book->promotion_discount=$request->promotion_discount;
        $book->save();

        // Notification with flash alert
        Session::put('success','New book data is saved');

        // Record to Activity Table
        $activity=new ActivityLog();
        $activity->table="book";
        $activity->description="new book added";
        $activity->save();

        return redirect()->route('books.index');
    }
    function destroy($id){
        Book::find($id)->delete();
        $activity=new ActivityLog();
        $activity->table="book";
        $activity->description="new book deleted";
        $activity->save();
        Session::put('success','Book data is deleted');
        $activity=new ActivityLog();
        $activity->table="book";
        $activity->description="new book deleted";
        $activity->save();
        return redirect('/books');
    }
    function edit($id){
        $book=Book::find($id);
        $page='books';
        return view('books.edit',compact('book','page'));
    }
    function update(BookRequest $request, Book $book){
     
        $book->name=$request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->category=$request->category;
        $book->publisher=$request->publisher;
        $book->published_date=$request->published_date;
        $book->publishing_time=$request->publishing_time;
        if($request->hasFile('cover_image'))
        {
            $cover_image=$request->file('cover_image');
            $name=$cover_image->getClientOriginalName();
            $cover_image->move(public_path().'/uploads/',$name);
            $book->cover_image=$name;
        }
        else 
        {
            $book->cover_image = NULL;
        }
        $book->price=$request->price;
        $book->qty=$request->qty;
        $book->promotion_discount=$request->promotion_discount;
        $book->update();

        Session::put('success','Book data is updated');
        $activity=new ActivityLog();
        $activity->table="book";
        $activity->description="new book added";
        $activity->save();
        return redirect()->route('books.index');
    }
}
