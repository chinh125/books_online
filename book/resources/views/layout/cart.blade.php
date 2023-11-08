@extends('layout.index')
@section('content')
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->list() as $key=>$value)
                            <tr>
                                <td class="shoping__cart__item">
                                    {{-- <img src="{{ asset('storage/images') }}/{{ $value['image'] }}" alt="" > --}}
                                    <img src="{{ Storage::url($value['image'])  }}" alt="" width="80px" height="80px">
                                    <h5>{{ $value['book_title'] }}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{ number_format($value['price']) }}
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">                           
                                        <div class="pro-qty">
                                            <input type="text" value="{{ $value['quantity'] }}" id="amount">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{ intval(number_format($value['price'])) * intval(number_format($value['quantity'])) }},000
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="" class="bi bi-x" style="font-size: 30px;color: black"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{ route('home') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="" class="primary-btn cart-btn">UPDATE CART</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <form action="{{ route('payyment_vn_pay') }}" method="post">
                        @csrf
                    <ul>
                        <li>Total <span>{{ number_format($cart->totalPrice()) }} VND</span></li>
                    </ul>
                    <input type="hidden" value="{{ intval(number_format($cart->totalPrice())) }}">
                    <button type="submit" class="primary-btn">Thanh toán VnPay</button>
                    </form>
                </div>
            </div>
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