@extends('layout.admin')
@section('content')
<form action="{{ route('edit-book',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @csrf
    <div class="row">
        <div class="col-md-6">
            Title
            <input type="text" name="title" class="form-control" value="{{ $books->title }}">
            <span class="@error('title') is-valid  @enderror" style="color: red" >{{ $errors->first('title') }}</span>
        </div>
        <div class="col-md-6">
            Price
            <input type="text" name="price" class="form-control" value="{{ $books->price }}">
            <span class="@error('price') is-valid  @enderror" style="color: red" >{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="row">
        <hr style="color:#fff">
    </div>
    <div class="row">
        <div class="col-md-6">
             Relsease time
    <input type="text" name="release_time" class="form-control" value="{{ $books->release_time }}">
    <span class="@error('release_time') is-valid  @enderror" style="color: red" >{{ $errors->first('release_time') }}</span>
        </div>
        <div class="col-md-6">
            Quantity
    <input type="text" name="quantity" class="form-control" value="{{ $books->quantity }}">
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
    <input type="text" name="description_book" class="form-control" value="{{ $books->description_book }}">
    <span class="@error('description_book') is-valid  @enderror" style="color: red" >{{ $errors->first('description_book') }}</span>
    <div class="row">
        <hr style="color:#fff">
    </div>
    Category 
    <input type="text" name="cate_id" class="form-control" value="{{ $books->cate_id }}"> 
    <span class="@error('cate_id') is-valid  @enderror" style="color: red" >{{ $errors->first('cate_id') }}</span>
    <div class="row">
        <hr style="color:#fff">
    </div>
    <button class="btn btn-success">Update</button>
</form>

@endsection