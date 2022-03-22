@extends('layouts.master')
@section('title','Author New')
@section('heading','New Author')
@section('action-btn')
<a href="{{route('authors.index')}}" class="btn btn-warning btn-lg"> <i class="fa-solid fa-angle-left"></i>Back</a>
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{route('authors.store')}}" method="POST">
        @csrf
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
            @if ($errors->has('name'))
                <strong class="text-danger">
                    {{$errors->first('name')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Phone no</label>
            <input type="text" name="phone_no" class="form-control" value="{{old('phone_no')}}">
        </div>
        <div class="my-3">
            <label for="">Biography</label>
            <input type="text" name="biography" class="form-control" value="{{old('biography')}}" >
            @if ($errors->has('biography'))
                <strong class="text-danger">
                    {{$errors->first('biography')}}
                </strong>
            @endif
        </div>
        <div class="my-3">
            <label for="">Profile image</label>
            <input type="file" name="profile_image" class="dropify form-control" value="{{old('profile_image')}}">
        </div>
        <div class="my-3">
            <label for="">Education level</label>
            <input type="text" name="education_level" class="form-control" value="{{old('education_level')}}">
        </div>
        <div class="my-3">
            <label for="">Married status</label>
            <input type="text" name="married_status" class="form-control" value="{{old('married_status')}}">
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-secondary btn-lg mx-4"><i class="fa-solid fa-floppy-disk"></i>Save</button>
        </div>
    </form>
</div>
@endsection