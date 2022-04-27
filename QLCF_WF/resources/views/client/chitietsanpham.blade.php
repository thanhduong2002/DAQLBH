@extends('template.mytemplate')
@section('content')
<div class="fruit-details">
    <div class="fruit-details__list">
        @foreach($dulieu as $item)
        <div class="fruit-details__item">
            <div class="fruit-details__image">
                <img src="{{ asset($item->anh)}}" alt="" class="fruit-details__images">
            </div>
            <div class="fruit-details__content">
                <p class="fruit-details__name">{{$item->tenhh}}</p>
                <p class="fruit-details__price">
                    {{ number_format($item->dongia, 0) }}
                    <sup>đ</sup>
                </p>
                <input type="number"  class="fruit-details__number" value="1" name="quantity" id="" min="1" max="10">
                @if(Auth::check())
                <button class="fruit-details__btn"><a href="{{URL::to('add-to-cart/'.$item->mahh)}}">Thêm vào giỏ hàng</a></button>
                @else
                <button class="fruit-product__btn" onclick="return confirm('Mời bạn đăng nhập để mua hàng')">Thêm vào giỏ hàng</button>
                @endif
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection