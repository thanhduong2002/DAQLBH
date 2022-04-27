@extends('template.mytemplate')
@section('content')
<div class="fruit">
    <!-- Start Banner -->
    <div class="fruit-banner">
        <div class="fruit-banner__list">
            <div class="fruit-banner__content">
                <h1 class="fruit-banner__title">
                THÊM CHÚT ĐƯỜNG CÀ PHÊ CÓ NGỌT? THÊM CHÚT TÌNH TÌNH CÓ THUỘC VỀ NHAU
                </h1>
                <p class="fruit-banner__desc">
                Sản phẩm cà phê hạt do THE COFFEE HOUSE sản xuất được lựa chọn từ những hạt cà phê tốt nhất : tinh túy Arabica – Tybica vùng Espirito Santo thuộc quốc gia Braxin , đỉnh cao Robusta vùng Buôn Hồ thuộc quốc gia Việt Nam , cho ra đời sản phẩm cà phê hạt sạch nguyên chất sẽ làm hài lòng những thượng khách sành uống cà phê nhất !
                Tiêu chí lâu dài của THE COFFEE HOUSE UY TÍN – CHẤT LƯỢNG – CHUYÊN NGHIỆP
                Hãy thưởng thức và cảm nhận hương vị CÀ PHÊ ĐÍCH THỰC !.
                </p>
                <button class="fruit-banner__button">XEM THÊM</button>
            </div>
            <div class="fruit-banner__image">
                <img src="{{asset('public/assets/images/home.jpg')}}" alt="" class="fruit-banner__images">
            </div>
        </div>
    </div>

  
    <!-- End Banner -->
    <!-- End Header -->
    <!-- Start Products -->
    <div class="fruit-product">
        <span class="fruit-product__view"><a href="{{asset('all-san-pham')}}">Xem tất cả</a></span>
        <div class="fruit-product__list">

            @foreach($hanghoa as $item)
            <div class="fruit-product__item">
                <a href="{{URL::to('/chi_tiet_san_pham/'.$item->mahh)}}"><img src="{{$item->anh}}" alt="" class="fruit-product__images"></a>
                <h3 class="fruit-product__name-product">
                    {{$item->tenhh}}
                </h3>
                <p class="fruit-product__price">
                    {{ number_format($item->dongia, 0) }} <sup>đ</sup>
                </p>
                @if (Auth::check())
                <button class="fruit-product__btn"><a href="{{URL::to('add-to-cart/'.$item->mahh)}}">THÊM VÀO GIỎ HÀNG</a></button>
                @else
                <button class="fruit-product__btn" onclick="return confirm('Mời bạn đăng nhập để mua hàng')">THÊM VÀO GIỎ HÀNG</button>
                @endif
            </div>
            
            @endforeach
            <div style="font-size:20px;">
                {{ $hanghoa->links('vendor.pagination.bootstrap-5') }}
            </div>
            
        </div>
    </div>
    <!-- End Products --> 
</div>

@endsection