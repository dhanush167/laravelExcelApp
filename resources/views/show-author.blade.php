@extends('layouts.app')
@section('title') List Authors @endsection
@section('content')
    <div class="container">
        <a class="btn btn-success" href="{{ route('export',['type'=>'xls']) }}">Download Excel xls</a>
        <a class="btn btn-success" href="{{ route('export',['type'=>'xlsx']) }}">Download Excel xlsx</a>
        <hr/>
    </div>
    @if (count($authors) == 0)
        <div class="alert alert-info" role="alert">
            <strong>No files uploaded</strong>
        </div>
    @else
        <div class="container">
            <a href="{{ url()->previous() }}" class="btn btn-default">Return back to List Books</a>
            <hr/>
            <h3>List Authors</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name </th>
                    <th scope="col">Surname</th>
                    <th scope="col">Book ID</th>
                </tr>
                </thead>
                <tbody>
                @foreach($authors as $author)
                    <tr>
                        <th>{{ $author->id }}</th>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->surname }}</td>
                        <td>{{ $author->book_id }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $authors->links() }}
        </div>
    @endif
@endsection
