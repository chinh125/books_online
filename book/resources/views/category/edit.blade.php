@extends('layout.admin')
@section('content')
<form action="{{ route('edit-category',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>Category name</p>
    <input type="text" name="category_name" value="{{ $cate->category_name }}" class="form-control">
    <span class="@error('category_name') is-valid  @enderror" style="color: red" >{{ $errors->first('category_name') }}</span>
    <div class="row"><hr style="color: #fff"></div>
    <button>Cap nhap</button>
</form>
@endsection