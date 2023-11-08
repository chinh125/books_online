@extends('layout.index')
@section('content')
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators" style="padding-left:120px">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('storage/images/slide1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('storage/images/slide2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/images/slide3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row">
    <hr style="color:#fff">
</div>

<div class="featured_boks">

    <h1>Top 10 Sách Nổi Bật</h1>

    <div class="featured_book_box">
        @foreach($book_top as $book)
        <div class="featured_book_card">
                <div class="featurde_book_img">
                    <img src="{{$book->image? Storage::url($book->image):''}}">
                </div>
                <div class="featurde_book_tag">
                    <h4>Tên Sách: {{$book->title}}</h3>
                    <h5 class="writer">Tác Giả: {{$book->author_name}}</h5>  
                    <h5 class="book_price">Giá Khuyến Mãi: {{ number_format(intval($book->price)-(intval($book->price) * 0.2))  }} VNĐ<div style="text-decoration: line-through"><br> Giá Gốc: {{number_format($book->price).' '.'VNĐ'}} VNĐ</div></h5>
                    <a href="{{ route('detail-book',['id'=>$book->id]) }}" class="f_btn" id="btn-view">Chi Tiết</a>
                </div>
        </div>
        @endforeach
    </div>

</div>

<div class="featured_boks">
    <h1>Sách mới nhất</h1>
    <div class="featured_book_box">
        @foreach($books as $book)
        <div class="featured_book_card">
                <div class="featurde_book_img">
                    <img src="{{$book->image? Storage::url($book->image):''}}">
                </div>
                <div class="featurde_book_tag">
                  <h4>Tên Sách: {{$book->title}}</h3>
                    <h5 class="writer">Tác Giả: {{$book->author_name}}</h5>  
                    <h5 class="book_price">Giá Khuyến Mãi: {{ number_format(intval($book->price)-(intval($book->price) * 0.2))  }} VNĐ<div style="text-decoration: line-through"><br> Giá Gốc: {{number_format($book->price).' '.'VNĐ'}} VNĐ</div></h5>
                    <a href="{{ route('detail-book',['id'=>$book->id]) }}" class="f_btn" id="btn-view">Chi Tiết</a>
                </div>
        </div>
        @endforeach
    </div>

</div>
<script>
  const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})
</script>
@endsection