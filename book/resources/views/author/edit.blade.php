@extends('layout.admin')
@section('content')
    <form action="{{ route('edit-author',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                Author name
                <input type="text" name="author_name" class="form-control" value="author_name">
            </div>
            <div class="col-md-6">
                Birthday
                <input type="text" name="birthday" class="form-control" value="birthday">
            </div>
        </div>
        <div class="row"><hr style="color:#fff"></div>
        Description author
        <textarea name="description_author" id="" cols="30" rows="10" class="form-control" value="description_author">
        </textarea>
        <div class="row"><hr style="color:#fff"></div>
        Gender  <div class="row"><hr style="color:#fff"></div>
        <input type="radio" name="gender" value="0" @if($user->gender == 0) checked @endif>Nam
        <input type="radio" name="gender" value="1">Nu
        <div class="row"><hr style="color:#fff"></div>
        <button class="btn btn-primary">Add new</button>
    </form>
@endsection