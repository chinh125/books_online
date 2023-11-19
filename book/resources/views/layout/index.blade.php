<?php use App\Models\category; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color-purple.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <header class="header">
        <div class="header-1">
            
        <a href="{{ route('home') }}" class="logo" style="padding-left: 50px;text-decoration:none"><i class="fas fa-book"></i>bookly</a>
        
            <form action="{{ route('search') }}" method="get" class="search-form">
                <input type="text" name="search" placeholder="search here ..." id="search-book">
                <button><label for="search-book" class="fas fa-search"></label></button>
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
                    @foreach(category::all() as $cates)
                    <li><a href="{{ route('categories-book',['id'=>$cates->id]) }}">{{ $cates->category_name }}</a></li>
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
        

        <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <h2 style="font-weight: bolder;color:#342E37">Địa chỉ - Thông tin liên hệ</h2>
                        </div>
                        <ul>
                            <li><span style="font-weight: bolder;color:#342E37">Address:</span> 60-49 Road 11378 New York</li>
                            <li><span style="font-weight: bolder;color:#342E37">Phone:</span> +65 11.188.888</li>
                            <li><span style="font-weight: bolder;color:#342E37">Email:</span> hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fas fa-facebook"></i></a>
                            <a href="#"><i class="fas fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
</body>
<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>