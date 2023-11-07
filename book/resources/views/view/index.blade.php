@extends('layout.admin')
@section('content')
<h1>{{ $tieu_de }}</h1>
<table class="table">
    <tr class="table-active">
        <td>Id</td>
        <td>Book</td>
        <td>Rate</td>
        <td>Comment</td>
        <td>Action</td>
    </tr>
    @foreach ($views as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->book_id == $item->book_id ? $item->title : '' }}</td>
            <td>{{ $item->rate }}</td>
            <td>{{ $item->comment }}</td>
            <td>
                <a href="{{ route('delete-views',['id'=>$item->id]) }}" onclick="return confirm('Bạn có muốn xóa không?')"class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection