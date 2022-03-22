@extends('layouts.master')
@section('title','Authors Data')
@section('heading','Authors')
@section('action-btn')
<a href="{{route('authors.create')}}" class="btn btn-info btn-lg">New Author</a>
@endsection

@section('content')
<table class="table table-dark table-striped table-hover">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Phone no</td>
        <td>Biography</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($authors as $author)
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->phone_no}}</td>
            <td>{{$author->biography}}</td>
            <td><a href="{{route('authors.show',$author->id)}}" class="btn btn-warning">View</a></td>
            <td><a href="{{route('authors.edit',$author->id)}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action="{{route('authors.destroy',$author->id)}}" method="POST">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
                
        </tr>
        
    @endforeach
</table>
<div class="row">
    <div class="col-md-12">{{$authors->links()}}</div>
</div>
@endsection