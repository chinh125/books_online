@extends('layout.admin')
@section('content')
<form action="{{ route('add-book') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            Title
            <input type="text" name="title" class="form-control">
        <span class="@error('title') is-valid  @enderror" style="color: red" >{{ $errors->first('title') }}</span>
        </div>
        <div class="col-md-6">
            Price
            <input type="text" name="price" class="form-control">
            <span class="@error('price') is-valid  @enderror" style="color: red" >{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="row">
        <hr style="color:#fff">
    </div>
    <div class="row">
        <div class="col-md-6">
            Relsease time
    <input type="text" name="release_time" class="form-control">
    <span class="@error('release_time') is-valid  @enderror" style="color: red" >{{ $errors->first('release_time') }}</span>
        </div>
        <div class="col-md-6">
            Quantity
    <input type="text" name="quantity" class="form-control">
    <span class="@error('quantity') is-valid  @enderror" style="color: red" >{{ $errors->first('quantity') }}</span>
        </div>
    </div>
    <div class="row">
        <hr style="color:#fff">
    </div>
    Image
    <input type="file" name="image" class="form-control"> 
    <span class="@error('image') is-valid  @enderror" style="color: red" >{{ $errors->first('image') }}</span>
    <div class="row">
        <hr style="color:#fff">
    </div>
    Description 
    <textarea cols="30" rows="10" name="description_book" class="form-control"></textarea> 
    <span class="@error('description_book') is-valid  @enderror" style="color: red" >{{ $errors->first('description_book') }}</span>
    <div class="row">
        <hr style="color:#fff">
    </div>
    Category 
    <select name="cate_id" id="" class="form-control">
        <option value="1">Sách thiếu nhi</option>    
        <option value="2">Sách văn học Việt Nam</option>    
        <option value="3">Sách văn học nước ngoài</option>    
        <option value="4">Sách dành kĩ năng sống</option>     
    </select> 
    <span class="@error('cate_id') is-valid  @enderror" style="color: red" >{{ $errors->first('cate_id') }}</span>
    <div class="row">
        <hr style="color:#fff">
    </div>
    <button class="btn btn-primary">Add new product</button>
    <a href="{{ route('list-book') }}" role="button" class="btn btn-primary">List Book</a>
</form>
@endsection