@extends('layout.admin')
@section('content')
<table border="1" class="table table-striped table-hover">
    <tr class="table">
        <td>ID</td>
        <td>Title</td>
        <td>Price</td>
        <td>Relsease time</td>
        <td>Image</td>
        <td>Description</td>
        <td>Quantity</td>
        <td>Category</td>
        <td>Action</td>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->release_time }}</td>
            <td>
                <img src="{{ $book->image?Storage::url($book->image) : '' }}" width="150px" alt="">
            </td>
            <td>{{ $book->description_book }}</td>
            <td>{{ $book->quantity }}</td>
            <td>{{ $book->cate_id }}</td>
            <td>
                <a href="{{ route('delete-book',['id'=>$book->id]) }}" role="button" onclick="return connfirm('Bạn có muốn xóa không ')" class="btn btn-danger">Delete</a>
                <a href="{{ route('edit-book',['id'=>$book->id]) }}" role="button" class="btn btn-success">Edit</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{ route('add-book') }}" role="button" class="btn btn-primary">Them moi</a>
@endsection