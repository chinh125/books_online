@extends('layout.admin')
@section('content')
<form action="{{ route('add-category') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p style="font-size: 20px; font-family: Roboto"><strong>C</strong>ategory <strong>N</strong>ame</p>
    <input type="text" name="category_name" class="form-control" placeholder="Name category ... ">
    <div class="row"><hr style="color: #fff"></div>
    <button class="btn btn-primary" style="font-family: Roboto">Add category new</button>
    <a href="{{ route('list-category') }}" role="button" class="btn btn-dark">List category</a>
</form>
@endsection