<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="login-form-container">
        {{-- <a href="{{ route('home') }}"><div id="close-login-btn" class="fas fa-times"></div></a> --}}
        <form action="{{ route('login-home') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Đăng nhập</h3>
            @if($message = Session::get('error'))
            <div class="alert alert-danger ">
                <button type="button" data-dismiss="alert" class="alert"><span style="color: red">X</span></button>
                <strong style="font-size: 12px">{{ $message }}</strong>
            </div>
        @endif
            <span>Email</span>
            <input type="email" name="email" required class="box" id="" placeholder="enter your user email">
            <span>Password</span>
            <input type="password" name="password" id="" class="box" placeholder="enter your password">
            <input type="submit" value="sign in" class="btn">
            <p>Forget password ?<a href="">Click here</a></p>
            <p>Dont't have an account ? <a href="{{ route('register') }}">Create</a></p>
        </form>
    </div>
</body>
</html>