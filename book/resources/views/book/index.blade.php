@extends('layout.admin')
@section('content')
<h1 style="color: red">{{ $tieu_de }}</h1>
<table border="1" class="table table-striped table-hover">
    <tr class="table">
        <td>ID</td>
        <td style="text-align:center">Title</td>
        <td style="text-align:center">Price (VND)</td>
        <td style="text-align:center">Relsease time</td>
        <td style="text-align:center">Image</td>
        <td>Description</td>
        <td>Quantity</td>
        <td style="text-align:center">Category</td>
        <td style="text-align:center">Author</td>
        <td>Action</td>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td style="text-align:center">{{ $book->price }}</td>
            <td style="text-align:center">{{ $book->release_time }}</td>
            <td>
                <img src="{{ $book->image?Storage::url($book->image) : '' }}" width="150px" alt="">
            </td>
            <td>{{ $book->description_book }}</td>
            <td style="text-align:center">{{ $book->quantity }}</td>
            <td>{{ $book->category_name }}</td>
            <td>{{ $book->author_name }}</td>
            <td style="text-align:center;">
                <a href="{{ route('edit-book',['id'=>$book->id]) }}" role="button" class="btn btn-success" style="margin-top: 10px">Edit</a>
                <a href="{{ route('delete-book',['id'=>$book->id]) }}" role="button" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Delete</a>
                
            </td>
        </tr>
    @endforeach
</table>
<a href="{{ route('add-book') }}" role="button" class="btn btn-primary">Add new</a>
@endsection