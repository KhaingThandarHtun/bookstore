@extends('layouts.master')
@section('title','Category Detail Data')
@section('heading','Category Data')
@section('action-btn')
@endsection
@section('content')
<div class="p-3 mb-2 bg-secondary text-white">
    <ul class="list-group ">
        <li class="list-group-item">Name : {{$category->name}}</li>
        <li class="list-group-item">Description : {{$category->description}}</li>
        <li class="list-group-item">Status : 
            @if ($category->status==1) active
            @else inactive
            @endif
        </li>
        
    </ul>
</div>
<a href="{{route('categories.index')}}" class="btn btn-secondary btn-lg mx-3">Back</a>
<a href="{{route('categories.edit',$category->id)}}" class="btn btn-info btn-lg mx-3">Edit</a>
@endsection