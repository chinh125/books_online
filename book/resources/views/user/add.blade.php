@extends('layout.admin')
@section('content')
<form action="{{ route('add-user') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p style="font-size: 20px; font-family: Roboto">User Name</p>
    <input type="text" name="user_name" class="form-control" placeholder="User name ... ">
    <span class="@error('user_name') is-valid  @enderror" style="color: red" >{{ $errors->first('user_name') }}</span>
    <div class="row"><hr style="color: #fff"></div>
    <p style="font-size: 20px; font-family: Roboto">Password</p>
    <input type="text" name="password" class="form-control" placeholder="Password ... ">
    <span class="@error('password') is-valid  @enderror" style="color: red" >{{ $errors->first('password') }}</span>
    <div class="row"><hr style="color: #fff"></div>
    <p style="font-size: 20px; font-family: Roboto">Email</p>
    <input type="text" name="email" class="form-control" placeholder="Email ... ">
    <span class="@error('email') is-valid  @enderror" style="color: red" >{{ $errors->first('email') }}</span>
    <div class="row"><hr style="color: #fff"></div>
    <input type="radio" name="gender" value="0"> Male
    <input type="radio" name="gender" value="1"> Female
    <span class="@error('gender') is-valid  @enderror" style="color: red" >{{ $errors->first('gender') }}</span>
    <div class="row"><hr style="color: #fff"></div>
    <select name="role" class="form-control">
        <option value="" disabled>--Choice--</option>
        <option value="0">Administrators</option>
        <option value="1">Customers</option>
    </select>
    <span class="@error('role') is-valid  @enderror" style="color: red" >{{ $errors->first('role') }}</span>
    <div class="row"><hr style="color: #fff"></div>
    <button class="btn btn-primary" style="font-family: Roboto">Add new user</button>
    <a href="{{ route('list-user') }}" role="button" class="btn btn-dark">List user</a>
</form>
@endsection