@extends('layout.index')
@section('content')
@foreach($categories as $item)
    <h1>{{ $item->category_name }}</h1>
@endforeach
@endsection