@extends('layout.index')
@section('content')
<style>
    .bi-facebook:hover{color:blue}
    .bi-twitter:hover{color:rgb(178, 178, 240)}
    .bi-instagram:hover{color:blue}
    .bi-pinterest:hover{color:red}
</style>
<div class="row">
    <hr style="color:#fff">
</div>
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{ $detail_book->image?Storage::url($detail_book->image) : '' }}" alt="" >
                    </div>
                    {{-- <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="img/product/details/product-details-2.jpg"
                            src="img/product/details/thumb-1.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-3.jpg"
                            src="img/product/details/thumb-2.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-5.jpg"
                            src="img/product/details/thumb-3.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-4.jpg"
                            src="img/product/details/thumb-4.jpg" alt="">
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <form action="{{ route('add-to-cart') }}" method="post" enctype="multipart/form-data">
                @csrf
            
                <div class="product__details__text">
                    <input type="hidden" name="id" value="{{ $detail_book->id }}">
                    <h3>{{ $detail_book->title }}</h3>
                    <div class="product__details__rating">
                        <span style="text-transform: uppercase">Đánh giá </span>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star-half-o"></i>
                    </div>
                    <div class="product__details__price"> {{number_format($detail_book->price) }} VNĐ</div>
                    <p>{{ $detail_book->description_book }}</p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <a class="btn btn-white" onclick="handleMinus()"><i class="bi bi-dash"></i></a>
                            <div class="pro-qty">
                                
                                <input type="text" value="1" name="quantity" id="amount">
                               
                            </div> <a class="btn btn-white" onclick="handlePlus()"><i class="bi bi-plus"></i></a>
                        </div>
                    </div>
                    <button type="submit" class="primary-btn">ADD TO CARD</button>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <ul>
                        <li><b>Tác giả</b> <span>{{ $detail_book->author_name }}</span></li>
                        <li><b>Shipping</b>  <samp style="color: red">Free pickup today</samp></span></li>
                        <li><b>Share on</b>
                            <div class="share">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>

<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Giới thiệu bổ sung</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($cate_book as $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" style="text-align:center">
                        <img src="{{ $item->image?Storage::url($item->image) : '' }}" alt="" width="250px">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="bi bi-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('detail-book',['id'=>$item->id]) }}">{{ $item->title }}</a></h6>
                        <h5>{{ number_format($item->price) }} VNĐ</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    let render = (amount)=>{
        amountElement.value = amount
    }
    let handlePlus = () =>{
        amount++
        render(amount);
    }

    let handleMinus = ()=>{
        if(amount>1){
            amount--
        }
        render(amount);
    }

    amountElement.addEventListener('input',()=>{
        amount=amountElement.value;
        amount = parseInt(amount);
        amount = (isNaN(amount)|| amount==0)?1:amount;
        render(amount)
    })
</script>
@endsection