<?php use App\Models\category; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/color-purple.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
    
      </style>
</head>
<body>
    <header class="header">
        <div class="header-1">
            
            <a href="#" class="logo" style="padding-left: 50px"><i class="fas fa-book"></i>bookly</a>
        
            <form action="#" method="post" class="search-form">
                <input type="text" name="" placeholder="search here ..." id="search-book">
                <label for="search-book" class="fas fa-search"></label>
            </form>

            <div class="icons" style="padding-right: 50px">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="{{ route('cart-shop') }}" style="text-decoration: none" class="fas fa-shopping-cart"><span style="font-size: 10px">{{ $cart->totalQuantity() }}</span></a>
                
                @if(Auth::check())
                <a href="{{ route('login') }}" style="text-decoration: none"></a>
                <div id="login-btn" class="fas fa-user" style="font-weight: bolder">{{ Auth::user()->user_name }}</div>
                <a href="{{ route('logout') }}" style="text-decoration: none">Logout</a>
                @else
                <a href="{{ route('login') }}"><div id="login-btn" class="fas fa-user"></div></a>
                @endif
            </div>
        </div>

        <div class="header-2">
            <ul class="nav">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li>
                <a href="">Sản Phẩm</a>
                <ul class="sub-menu">
                    @foreach(category::all() as $cate)
                    <li><a href="">{{ $cate->category_name }}</a></li>
                    @endforeach
                    </ul>
                </li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </header>
    
        <nav class="bottom-navbar">
            <a href="" class="fas fa-home"></a>
            <a href="" class="fas fa-list"></a>
            <a href="" class="fas fa-tags"></a>
            <a href="" class="fas fa-comments"></a>
            <a href="" class="fas fa-blog"></a>
        </nav>
        
		@yield('content')
        
</body>
<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>