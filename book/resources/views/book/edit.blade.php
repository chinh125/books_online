@extends('layout.admin')
@section('content')
<form action="{{ route('edit-book',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @csrf
    <div class="row">
        <div class="col-md-6">
            Title
            <input type="text" name="title" class="form-control" value="{{ $books->title }}">
        </div>
        <div class="col-md-6">
            Price
            <input type="text" name="price" class="form-control" value="{{ $books->price }}">
        </div>
    </div>
    <div class="row">
        <hr style="color:#fff">
    </div>
    <div class="row">
        <div class="col-md-6">
             Relsease time
    <input type="text" name="release_time" class="form-control" value="{{ $books->release_time }}">
        </div>
        <div class="col-md-6">
            Quantity
    <input type="text" name="quantity" class="form-control" value="{{ $books->quantity }}">
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
    <input type="text" name="description_book" class="form-control" value="{{ $books->description_book }}">
    <div class="row">
        <hr style="color:#fff">
    </div>
    Category 
    <input type="text" name="cate_id" class="form-control" value="{{ $books->cate_id }}"> 
    <div class="row">
        <hr style="color:#fff">
    </div>
    <button class="btn btn-success">Update</button>
</form>

@endsection