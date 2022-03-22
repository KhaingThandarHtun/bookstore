@extends('layouts.master')
@section('title','Article Detail Data')
@section('heading','Article Data')
@section('action-btn')
@endsection
@section('content')
<div class="p-3 mb-2 bg-secondary text-white">
    <ul class="list-group ">
        <li class="list-group-item">Title : {{$article->title}}</li>
        <li class="list-group-item">Content : {{$article->content}}</li>    
    </ul>
</div>
<a href="{{route('articles.index')}}" class="btn btn-secondary btn-lg mx-3"><i class="fa-solid fa-angle-left"></i> Back</a>
<a href="{{route('articles.edit',$article->id)}}" class="btn btn-info btn-lg mx-3"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
@endsection