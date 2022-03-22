@extends('layouts.master')
@section('title','Article Data')
@section('heading','Articles')
@section('action-btn')
<a href="{{ route('articles.create')}}" class="btn btn-info btn-lg"> <i class="fa-solid fa-circle-plus"></i> New Article</a>
@endsection

@section('content')
<table class="table table-dark table-striped table-hover">
    <tr>
        <td>No</td>
        <td>Title</td>
        <td>Content</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($articles as $article)
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
            <td><a href="{{route('articles.show',$article->id)}}" class="btn btn-warning"> <i class="fa-solid fa-eye"></i> View</a></td>
            <td><a href="{{route('articles.edit',$article->id)}}" class="btn btn-info"> <i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
            <td>
                <form action="{{ route('articles.destroy',$article->id)}}" method="POST" >
                    @csrf @method('delete')
                    <button type="submit"  class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> Delete</button>
                </form>
            </td>
        </tr>
        
    @endforeach
</table>
<div class="row">
    <div class="col-md-12">{{$articles->links()}}</div>
</div>
@endsection