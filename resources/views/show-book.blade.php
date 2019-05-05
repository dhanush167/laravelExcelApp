@extends('layouts.app')
@section('title') List Books @endsection
@section('content')
    <div class="container">
        <a class="btn btn-success" href="{{ route('export',['type'=>'xls']) }}">Download Excel xls</a>
        <a class="btn btn-success" href="{{ route('export',['type'=>'xlsx']) }}">Download Excel xlsx</a>
        <hr/>
    </div>
    @if (count($books) == 0)
        <div class="alert alert-info" role="alert">
            <strong>No files uploaded</strong>
        </div>
    @else
        <div class="container">
            <h3>List Books</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author</th>
                    <th scope="col">Editor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <th>{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->author}}</td>
                        <td>{{ $book->editor }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $books->links() }}
        </div>
    @endif
@endsection
