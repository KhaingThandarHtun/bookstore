@extends('layouts.master')
@section('title','New Book Data')
@section('heading','New Book')
@section('action-btn')
<a href="{{route('books.index')}}" class="btn btn-warning btn-lg"> <i class="fa-solid fa-angle-left"></i>
    Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            @if ($errors->has('name'))
            <strong class="text-danger">
                {{$errors->first('name')}}
            </strong> 
            @endif
        </div>
        <div class="my-3">
            <label for="">Author</label>
            <input type="text" class="form-control" name="author" value="{{old('author')}}">
            @if ($errors->has('author'))
                <strong class="text-danger">
                    {{$errors->first('author')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" value="{{old('description')}}">
            @if ($errors->has('description'))
                <strong class="text-danger">
                    {{$errors->first('description')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Category</label>
            <input type="text" class="form-control" name="category" value="{{old('category')}}">
            @if ($errors->has('category'))
                <strong class="text-danger">
                    {{$errors->first('category')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Publisher</label>
            <input type="text" class="form-control" name="publisher" value="{{old('publisher')}}">
            @if ($errors->has('publisher'))
                <strong class="text-danger">
                    {{$errors->first('publisher')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Publishing Date</label>
            <input type="date" class="form-control" name="published_date" value="{{old('published_date')}}">
        </div>
        <div class="my-3">
            <label for="">Publishing Time</label>
            <input type="text" class="form-control" name="publishing_time" value="{{old('publishing_time')}}">
        </div>
        <div class="my-3">
            <label for="">Cover Image</label>
            <input type="file" class="dropify form-control" name="cover_image" value="{{old('cover_image')}}">
        </div>
        <div class="my-3">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="{{old('price')}}">
        </div>
        <div class="my-3">
            <label for="">Qty</label>
            <input type="text" class="form-control" name="qty" value="{{old('qty')}}">
            @if ($errors->has('qty'))
                <strong class="text-danger">
                    {{$errors->first('qty')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Promotion Discount</label>
            <input type="text" class="form-control" name="promotion_discount" value="{{old('promotion_discount')}}">
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-secondary btn-lg mt-3"> <i class="fa-solid fa-floppy-disk"></i>
                Save</button>
        </div>
    </form>
</div>
@endsection