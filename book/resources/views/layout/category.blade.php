@extends('layout.index')
@section('content')

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
                        <ul>
                            @foreach ($cates as $cate)
                                <li><a href="{{ route('categories-book',['id'=>$cate->id]) }}">{{ $cate->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <ul>
                            <li><input type="checkbox">10,000 VNĐ - 30,000 VNĐ</li>
                            <li><input type="checkbox">30,000 VNĐ - 50,000 VNĐ</li>
                            <li><input type="checkbox">50,000 VNĐ - 100,000 VNĐ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        
                        <h2>Danh mục sách</h2>
                        
                    </div>
                    <div class="row" style="display: flex">
                        @foreach($cate_book as $pd)
                        
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg">
                                    <img src="{{ $pd->image? Storage::url($pd->image):'' }}" alt="">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a style="text-decoration: none" href="{{ route('detail-book',['id'=>$pd->id]) }}">{{ $pd->title }}</a></h5>
                                        <div class="product__item__price" style="color: red">{{ number_format(intval($pd->price)-(intval($pd->price) * 0.2))  }} VNĐ  <br><span>{{ number_format($pd->price)}} VNĐ</span></div>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>     
                </div> 
            </div>
        </div>
    </div>
</section>

@endsection