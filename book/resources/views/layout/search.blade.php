@extends('layout.index')
@section('content')
<style>
    a{text-decoration: none;color: #444}
    a:hover{color:green;font-weight: bold;transition: 0.5;}
    img{text-align: center;width: 150px;height: 200px}
    img:hover{ width: 200px;height: 250px;transform: scale(1.0);}
    .container{height: 320px;margin-top: 20px}
</style>
<div class="container">
<div class="row">
    <span style="font-size: 20px;font-weight:bolder">Từ khóa tìm kiếm: <span style="color:#27ae60">{{ $search }}</span></span><br>
    <hr>
    @foreach($book as $b)
    <div class="item-box col-md-3">
        <div class="col-md-12" style="text-align:center">
            <img src="{{ $b->image?Storage::url($b->image) : ''}}" alt="">
        </div>
        <div class="col-md-12" style="text-align: center;font-size:15px">
            <span><a href="">{{ $b->title }}</a></span>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection