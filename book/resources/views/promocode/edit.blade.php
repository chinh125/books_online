@extends('layout.admin')
@section('content')
    <form action="{{ route('edit-promo-code',['id'=>request()->route('id')]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                Promo code
                <input type="text" name="promo_code" class="form-control" value="{{ $promocodes->promo_code }}">
            </div>
            <div class="col-md-6">
                Event
                <input type="text" name="event" class="form-control"  value="{{ $promocodes->event }}">
            </div>
        </div> <div class="row"><hr style="color: #fff"></div>
        <div class="row">
            <div class="col-md-6">
                Start date
                <input type="date" name="start_date" class="form-control"  value="{{ $promocodes->start_date }}">
            </div>
            <div class="col-md-6">
                End date
                <input type="date" name="end_date" class="form-control"  value="{{ $promocodes->end_date }}">
            </div>
        </div> <div class="row"><hr style="color: #fff"></div>
        <div class="row">
            <div class="col-md-6">
               Code payyment <div class="row"><hr style="color: #fff"></div>
               <select name="code_payyment" class="form-control">
                <option value="0" @if($promocodes->code_payyment == 0) selected @endif>5%</option>
                <option value="1" @if($promocodes->code_payyment == 1) selected @endif>10%</option>
                <option value="2" @if($promocodes->code_payyment == 2) selected @endif>15%</option>
                <option value="3" @if($promocodes->code_payyment == 3) selected @endif>20%</option>
            </select>
            </div>
        </div> <div class="row"><hr style="color: #fff"></div>
        <button class="btn btn-primary" style="font-family: Roboto">Add promo code new</button>
    <a href="{{ route('list-promo-code') }}" role="button" class="btn btn-dark">List promo code</a>
    </form>
@endsection