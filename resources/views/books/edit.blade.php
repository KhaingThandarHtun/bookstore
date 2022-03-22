@extends('layouts.master')
@section('title','New Book Data')
@section('heading','New Book')
@section('action-btn')
<a href="{{route('books.index')}}" class="btn btn-warning btn-lg"> <i class="fa-solid fa-angle-left"></i>Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{route('books.update',$book->id)}}" method="POST">
        @csrf @method('PUT')
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$book->name}}">
        </div>
        <div class="my-3">
            <label for="">Author</label>
            <input type="text" class="form-control" name="author" value="{{$book->author}}">
        </div>
        <div class="my-3">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" value="{{$book->description}}">
        </div>
        <div class="my-3">
            <label for="">Category</label>
            <input type="text" class="form-control" name="category" value="{{$book->category}}">
        </div>
        <div class="my-3">
            <label for="">Publisher</label>
            <input type="text" class="form-control" name="publisher" value="{{$book->publisher}}">
        </div>
        <div class="my-3">
            <label for="">Publishing Date</label>
            <input type="date" class="form-control" name="publishing_date" value="{{$book->published_date}}">
        </div>
        <div class="my-3">
            <label for="">Publishing Time</label>
            <input type="text" class="form-control" name="publishing_time" value="{{$book->publishing_time}}">
        </div>
        <div class="my-3">
            <label for="">Cover Image</label>
            <input type="file" class="dropify form-control" name="cover_image" data-default-file="{{ $book->cover_image ? url('/uploads/'.$book->cover_image): ''}}" >
        </div>
        <div class="my-3">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="{{$book->price}}">
        </div>
        <div class="my-3">
            <label for="">Qty</label>
            <input type="text" class="form-control" name="qty" value="{{$book->qty}}">
        </div>
        <div class="my-3">
            <label for="">Promotion Discount</label>
            <input type="text" class="form-control" name="promotion_discount" value="{{$book->promotion_discount}}">
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-secondary btn-lg mx-4"> <i class="fa-solid fa-floppy-disk"></i>
                Update</button>
        </div>
    </form>
</div>
@endsection