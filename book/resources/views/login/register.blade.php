<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="login-form-container">
        <form action="{{ route('register-add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Đăng ký</h3>
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" data-dismiss="alert" class="alert">v</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <strong><span>Tên đăng nhập</span></strong>
            <input type="text" name="user_name" class="box" placeholder="User name ... ">
            <strong><span>Mật khẩu</span></strong>
            <input type="password" name="password" class="box" placeholder="Password ... ">
            <strong><span>Email</span></strong>
            <input type="email" name="email" class="box" id="" placeholder="enter your email"> 
            <strong><span>Giới tính</span></strong>
            <input type="radio" name="gender" value="0"> Nam
            <input type="radio" name="gender" value="1"> Nữ
            <select name="role" class="box">
                <option value="0" disabled>Quản trị viên</option>
                <option value="1">Khách hàng</option>
            </select>
            <input type="submit" value="register" class="btn">
            <p>You have an account ? <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>