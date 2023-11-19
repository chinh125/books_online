@extends('layout.admin')
@section('content')
<?php use App\Models\author; use App\Models\category; ?>
<form action="{{ route('add-book') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            Title
            <input type="text" name="title" class="form-control">
        </div>
        <div class="col-md-6">
            Price
            <input type="text" name="price" class="form-control">
        </div>
    </div>
    <div class="row">
        <hr style="color:#fff">
    </div>
    <div class="row">
        <div class="col-md-6">
            Relsease time
    <input type="text" name="release_time" class="form-control">
        </div>
        <div class="col-md-6">
            Quantity
    <input type="text" name="quantity" class="form-control">
        </div>
    </div>
    <div class="row">
        <hr style="color:#fff">
    </div>
    Image
    <input type="file" name="image" class="form-control"> 
    <div class="row">
        <hr style="color:#fff">
    </div>
    Description 
    <textarea cols="30" rows="10" name="description_book" class="form-control"></textarea> 
    <div class="row">
        <hr style="color:#fff">
    </div>
    Category 
    <select name="cate_id" id="" class="form-control">
        @foreach (category::all() as $cate_book)
        <option value="{{ $cate_book->id }}">{{ $cate_book->category_name }}</option>  
        @endforeach
    </select> 
    <div class="row">
        <hr style="color:#fff">
    </div>
    Auhtor
    <input type="text" name="author_name" id="" class="form-control">
    <button class="btn btn-primary">Add new product</button>
    <a href="{{ route('list-book') }}" role="button" class="btn btn-primary">List Book</a>
</form>
@endsection