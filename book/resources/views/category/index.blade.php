@extends('layout.admin')
@section('content')
<h1 style="color: red">{{ $tieu_de }}</h1>
<table class="table">
    <tr class="table-active">
        <td>Id</td>
        <td>Category name</td>
        <td>Action</td>
    </tr>
    @foreach ($cate as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->category_name }}</td>
            <td>
                <a href="{{ route('edit-category',['id'=>$item->id]) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('delete-category',['id'=>$item->id]) }}" onclick="return confirm('Bạn có muốn xóa không?')"class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{ route('add-category') }}" class="btn btn-primary">Thêm mới</a>
@endsection