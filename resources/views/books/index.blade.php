@extends('layouts.master')

@section('content')

<table class="table table-dark table-striped table-hover">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Author</td>
        <td>Description</td>
        <td>Category</td>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{++$loop->index}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->description}}</td>
        <td>{{$book->category}}</td>
        <td>
            <a href="{{route('books.show',$book->id)}}" class="btn btn-warning"> <i class="fa-solid fa-eye"></i> View</a>
        </td>
        <td>
            <a href="{{route('books.edit',$book->id)}}" class="btn btn-info"> <i class="fa-solid fa-pen-to-square"></i> Edit</a>
        </td>
        <td>
            <form action="{{route('books.destroy',$book->id)}}" method="POST">
                @csrf @method('delete')
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>
<div class="row">
    <div class="col-md-12">{{$books->links()}}</div>
</div>

@endsection
@section('title','Book Data')
@section('heading','Books')
@section('action-btn')
<a href="{{route('books.create')}}" class="btn btn-info btn-lg"> <i class="fa-solid fa-circle-plus"></i>
    New Book</a>
@endsection