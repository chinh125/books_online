@extends('layout.admin')
@section('content')
<h1>{{ $tieu_de }}</h1>
    <table class="table tablespecial">
        <tr>
            <td>ID</td>
            <td>User_name</td>
            <td>Password</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Role</td>
            <td>Action</td>
        </tr>
        @foreach($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->user_name }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->gender == 0 ? "Nam" : "Nữ" }}</td>
            <td>{{ $u->role == 0 ? "Quản trị viên" : "Khách hàng"}}</td>
            <td>
                <a href="{{ route('delete-user',['id'=>$u->id]) }}" onclick="return confirm('Bạn có muốn xóa không?')"class="btn btn-danger">Delete</a>
                <a href="{{ route('edit-user',['id'=>$u->id]) }}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('add-user') }}" class="btn btn-primary">Add new</a>
@endsection