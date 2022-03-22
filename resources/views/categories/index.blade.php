@extends('layouts.master')
@section('title','Category Data')
@section('heading','Category')
@section('action-btn')
<a href="{{ route('categories.create')}}" class="btn btn-info btn-lg">New Category</a>
@endsection

@section('content')
<table class="table table-dark table-striped table-hover">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Description</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($categories as $category)
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><a href="{{route('categories.show',$category->id)}}" class="btn btn-warning">View</a></td>
            <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action="{{ route('categories.destroy',$category->id)}}" method="POST" >
                    @csrf @method('delete')
                    <button type="submit"  class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        
    @endforeach
</table>
<div class="row">
    <div class="col-md-12">{{$categories->links()}}</div>
</div>
@endsection