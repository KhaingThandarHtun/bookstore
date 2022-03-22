@extends('layouts.master')
@section('title','Old Category')
@section('heading','Updated Category')
@section('action-btn')
<a href="{{route('categories.index')}}" class="btn btn-warning btn-lg">Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{ route('categories.update',$category->id)}}" method="POST">
        @csrf @method('put')
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
        </div>
        <div class="my-3">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{$category->description}}">
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-secondary btn-lg mx-4">Update</button>
        </div>
        
    </form>
</div>
@endsection