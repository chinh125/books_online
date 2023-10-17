@extends('layout.admin')
@section('content')
<form action="{{ route('edit-user',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <p style="font-size: 20px; font-family: Roboto">User Name</p>
    <input type="text" name="user_name" class="form-control" placeholder="User name ..." 
    value="{{ $user->user_name }}">
    <div class="row"><hr style="color: #fff"></div>
    <p style="font-size: 20px; font-family: Roboto">Password</p>
    <input type="text" name="password" class="form-control" placeholder="Password ... " 
    value="{{ $user->password }}">
    <div class="row"><hr style="color: #fff"></div>
    <p style="font-size: 20px; font-family: Roboto">Email</p>
    <input type="text" name="email" class="form-control" placeholder="Email ... " value="{{ $user->email }}">
    <div class="row"><hr style="color: #fff"></div>
    <input type="radio" name="gender" value="0" @if($user->gender == 0) checked @endif> Male
    <input type="radio" name="gender" value="1" @if($user->gender == 1) checked @endif> Female
    <div class="row"><hr style="color: #fff"></div>
    <select name="role" class="form-control">
        <option value="" >--Choice--</option>
        <option value="0" @if($user->role == 0) selected @endif>Administrators</option>
        <option value="1" @if($user->role == 1) selected @endif>Customers</option>
    </select>
    <div class="row"><hr style="color: #fff"></div>
    <button class="btn btn-primary" style="font-family: Roboto">Add new user</button>
    <a href="{{ route('list-user') }}" role="button" class="btn btn-dark">List user</a>
</form>
@endsection