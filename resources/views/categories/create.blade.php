@extends('layouts.master')
@section('title','New Category')
@section('heading','New Category')
@section('action-btn')
<a href="{{route('categories.index')}}" class="btn btn-warning btn-lg">Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
            <strong class="text-danger mb-3">{{$errors->first('name')}}</strong>
            @enderror
        </div>
        <div class="my-3" style="margin-top: 30px;">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}">
            @error('description')
            <strong class="text-danger mb-3">{{$errors->first('description')}}</strong>
            @enderror
        </div>
        <div class="my-4" style="margin-top: 30px;">
            <button type="submit" class="btn btn-info btn-lg my-3">Save</button>
        </div>
    </form>
</div>
@endsection