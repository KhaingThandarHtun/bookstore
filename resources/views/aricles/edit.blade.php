@extends('layouts.master')
@section('title','Edition on Article')
@section('heading','Edition on Article')
@section('action-btn')
<a href="{{route('articles.index')}}" class="btn btn-warning btn-lg"> <i class="fa-solid fa-angle-left"></i> Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{route('articles.update',$article->id)}}" method="POST">
        @csrf @method('put')
        <div class="my-3">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{$article->title}}">
            @error('title')
            <strong class="text-danger mb-3">{{$errors->first('title')}}</strong>
            @enderror
        </div>
        <div class="my-3" style="margin-top: 30px;">
            <label for="">content</label>
            <input type="text" name="content" class="form-control" value="{{$article->content}}">
            @error('content')
            <strong class="text-danger mb-3">{{$errors->first('content')}}</strong>
            @enderror
        </div>
        <div class="my-4" style="margin-top: 30px;">
            <button type="submit" class="btn btn-info btn-lg my-3"> <i class="fa-solid fa-floppy-disk"></i> Save</button>
        </div>
    </form>
</div>
@endsection