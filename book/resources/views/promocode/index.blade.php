@extends('layout.admin')
@section('content')
<table class="table" style="text-align: center">
    <tr class="table-active">
        <td>ID</td>
        <td>Promo code</td>
        <td>Event</td>
        <td>Start date</td>
        <td>End date</td>
        <td>Code payyment</td>
        <td>Action</td>
    </tr>
    @foreach ($promo_code as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->promo_code }}</td>
            <td>{{ $item->event }}</td>
            <td>{{ $item->start_date }}</td>
            <td>{{ $item->end_date }}</td>
            <td>{{ $item->code_payyment== 0 ? '5%' : '10%'}}</td>
            <td>
                <a href="{{ route('edit-promo-code',['id'=>$item->id]) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('delete-promo-code',['id'=>$item->id]) }}" onclick="return confirm('Bạn có muốn xóa không?')"class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{ route('add-promo-code') }}" class="btn btn-dark">Thêm mới</a>
@endsection