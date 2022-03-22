@extends('layouts.master')
@section('title','Old Author')
@section('heading','Updated Author')
@section('action-btn')
<a href="{{route('authors.index')}}" class="btn btn-warning btn-lg"><i class="fa-solid fa-angle-left"></i>Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{route('authors.update',$author->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$author->name}}">
        </div>
        <div class="my-3">
            <label for="">Phone no</label>
            <input type="text" name="phone_no" class="form-control" value="{{$author->phone_no}}">
        </div>
        <div class="my-3">
            <label for="">Biography</label>
            <input type="text" name="biography" class="form-control" value="{{$author->biography}}">
        </div>
        <div class="my-3">
            <label for="">Profile image</label>
            <input type="file" name="profile_image" class="dropify form-control" data-default-file="{{ $author->profile_image ? url('/uploads/'.$author->profile_image): ''}}">
        </div>
        <div class="my-3">
            <label for="">Education level</label>
            <input type="text" name="education_level" class="form-control" value="{{$author->education_level}}">
        </div>
        <div class="my-3">
            <label for="">Married status</label>
            <input type="text" name="married_status" class="form-control" value="{{$author->married_status}}">
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-secondary btn-lg mx-4"><i class="fa-solid fa-floppy-disk"></i>Update</button>
        </div>
        
    </form>
</div>
@endsection