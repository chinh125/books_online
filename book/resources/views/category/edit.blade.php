@extends('layout.admin')
@section('content')
<form action="{{ route('edit-category',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>Category name</p>
    <input type="text" name="category_name" value="{{ $cate->category_name }}" class="form-control">
    <button>Cap nhap</button>
</form>
@endsection