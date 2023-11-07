@extends('layout.index')
@section('content')
    <h1>Thanh toan thanh cong</h1>
    <h2>Thanks {{ Auth::user()->user_name }} da mua sach</h2>
@endsection