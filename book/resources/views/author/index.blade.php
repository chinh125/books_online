@extends('layout.admin')
@section('content')
    <table  class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>Author name</td>
            <td>Gender</td>
            <td>Birthday</td>
            <td>Description author</td>
            <td>Action</td>
        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->gender == 1 ? "Nam" : "Nu" }}</td>
                <td>{{ $author->birthday }}</td>
                <td>{{ $author->description_author }}</td>
                <td>
                    <a href="#" role="button" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Delete</a>
                <a href="#" role="button" class="btn btn-success" style="margin-top: 10px">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('add-author') }}" role="button" class="btn btn-primary">Add new</a>
@endsection