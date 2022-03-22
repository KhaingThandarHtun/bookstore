@extends('layouts.master')
@section('heading','Book Detail Data')
@section('title','Book Detail')
@section('action-btn')

@endsection
@section('content')
<div class="row">

        <div class="card col-md-4">
            @isset($book->cover_image)
            <img src="{{asset('/uploads/'.$book->cover_image)}}" class="img-fluid"  style="max-width:200px;" />    
            @endisset
        </div>
            
            <div class="card-body">
                <h1 class="card-title">{{$book->name}}</h1>
                <ul>
                <li >Author Name : {{$book->author}}</li>
                <li >Description : {{$book->description}}</li>
                <li >Category : {{$book->category}}</li>
                <li >Publisher : {{$book->publisher}}</li>
                <li >Publishing date : {{$book->published_date}}</li>
                <li >Publishing time : {{$book->publishing_time}}</li>  
                <li >Price : {{$book->price}}</li>
                <li >Qty : {{$book->qty}}</li>
                <li >Promotion Discount : {{$book->promotion_discount}}</li>
                <li >
                    Status @if ($book->staus==1) active
                        @else inactive
                    @endif
                </li>
            </ul>
            <a href="{{route('books.index')}}" class="btn btn-secondary btn-lg mx-3"><i class="fa-solid fa-angle-left"></i>Back</a>
            <a href="{{route('books.edit',$book->id)}}" class="btn btn-info btn-lg mx-3"><i class="fa-solid fa-pen-to-square">Edit</a>
            </div>
          </div>   

 
@endsection