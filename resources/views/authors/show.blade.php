@extends('layouts.master')
@section('heading','Author Detail Data')
@section('title','Author Detail')
@section('action-btn')

@endsection
@section('content')
<div class="row">

        <div class="card col-md-4">
            @isset($author->profile_image)
            <img src="{{asset('/uploads/'.$author->profile_image)}}" class="img-fluid"  style="max-width:200px;" />    
            @endisset
        </div>
            
            <div class="card-body">
                <h1 class="card-title">{{$author->name}}</h1>
                <ul>
                <li >Phone No : {{$author->phone_no}}</li>
                <li >Biography : {{$author->biography}}</li>
                <li >Education Level : {{$author->education_level}}</li>
                <li >Married Status : {{$author->married_status}}</li>
            </ul>
            <a href="{{route('authors.index')}}" class="btn btn-secondary btn-lg mx-3"><i class="fa-solid fa-angle-left"></i>Back</a>
            <a href="{{route('authors.edit',$author->id)}}" class="btn btn-info btn-lg mx-3"> <i class="fa-solid fa-pen-to-square"></i>Edit</a>
            </div>
          </div>   

 
@endsection