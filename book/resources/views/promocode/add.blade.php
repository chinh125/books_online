@extends('layout.admin')
@section('content')
    <form action="{{ route('add-promo-code') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                Promo code
                <input type="text" name="promo_code" class="form-control">
            </div>
            <div class="col-md-6">
                Event
                <input type="text" name="event" class="form-control">
            </div>
        </div> <div class="row"><hr style="color: #fff"></div>
        <div class="row">
            <div class="col-md-6">
                Start date
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="col-md-6">
                End date
                <input type="date" name="end_date" class="form-control">
            </div>
        </div> <div class="row"><hr style="color: #fff"></div>
        <div class="row">
            <div class="col-md-6">
               Code payyment <div class="row"><hr style="color: #fff"></div>
            <input type="radio" name="code_payyment" value="0"> 5%
            <input type="radio" name="code_payyment" value="1"> 10%
            </div>
        </div> <div class="row"><hr style="color: #fff"></div>
        <button class="btn btn-primary" style="font-family: Roboto">Add promo code new</button>
    <a href="{{ route('list-promo-code') }}" role="button" class="btn btn-dark">List promo code</a>
    </form>
@endsection