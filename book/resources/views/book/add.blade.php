@extends('layout.admin')
@section('content')
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
    <textarea name="" id="" cols="30" rows="10" name="description_book" class="form-control"></textarea> 
    <div class="row">
        <hr style="color:#fff">
    </div>
    Category 
    <input type="text" name="cate_id" class="form-control"> 
    <div class="row">
        <hr style="color:#fff">
    </div>
    <button class="btn btn-primary">Add new product</button>
</form>
@endsection