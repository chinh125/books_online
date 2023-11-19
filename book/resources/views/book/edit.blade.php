@extends('layout.admin')
@section('content')
<form action="{{ route('edit-book',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
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
    <select name="cate_id" id="" class="form-control">
        <option value="3" @if($books->cate_id == 3) selected @endif>Sách thiếu nhi</option>    
        <option value="1" @if($books->cate_id == 1) selected @endif>Sách văn học Việt Nam</option>    
        <option value="2" @if($books->cate_id == 2) selected @endif>Sách văn học nước ngoài</option>    
        <option value="4" @if($books->cate_id == 4) selected @endif>Sách ngoại ngữ</option>     
    </select>  
    <div class="row">
        <hr style="color:#fff">
    </div>
    <input type="text" name="author_name" class="form-control" value="{{ $books->author_name }}">
    <button class="btn btn-success">Update</button>
</form>

@endsection