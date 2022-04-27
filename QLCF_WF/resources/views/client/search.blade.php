@extends('template.mytemplate')
@section('content')
<div class="fruit-productt">
    <div>
        <h2>Tìm kiếm</h2>
        <h4>Tìm thấy {{count($sanpham)}} sản phẩm</h4>
    </div>
        <div class="fruit-productt__list">
            @foreach($sanpham as $item)
            <div class="fruit-productt__item">
            <a href="{{asset('/chi_tiet_san_pham/'.$item->mahh)}}"><img src="{{asset($item->anh)}}" alt="" class="fruit-product__image"></a>
                <h3 class="fruit-productt__name">{{$item->tenhh}}</h3>
                <p class="fruit-productt__price">{{ number_format($item->dongia, 0) }}<sup>đ</sup></p>
                @if(Auth::check())
                <button class="fruit-productt__btn"><a href="{{URL::to('add-to-cart/'.$item->mahh)}}">Thêm vào giỏ hàng</a></button>
                @else
                <button class="fruit-product__btn" onclick="return confirm('Mời bạn đăng nhập để mua hàng')">Thêm vào giỏ hàng</button>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endsection