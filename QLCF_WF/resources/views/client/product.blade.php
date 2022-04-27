@extends('template.mytemplate')
@section('content')
<!--  -->
<div class="fruit-productt">

    <div class="fruit-productt__list">
        @foreach($dulieu as $item)
        <div class="fruit-productt__item">
            <a href="{{asset('/chi_tiet_san_pham/'.$item->mahh)}}"><img src="{{asset($item->anh)}}" alt="" class="fruit-product__image"></a>
            <h3 class="fruit-productt__name">{{$item->tenhh}}</h3>
            <p class="fruit-productt__price">{{ number_format($item->dongia, 0) }}<sup>đ</sup></p>
            @if(Auth::check())
            <button class="fruit-productt__btn"><a href="{{URL::to('add-to-cart/'.$item->mahh)}}">THÊM VÀO GIỎ HÀNG</a></button>
            @else
            <button class="fruit-productt__btn" onclick="return confirm('Mời bạn đăng nhập để mua hàng')">THÊM VÀO GIỎ HÀNG</button>
            @endif
        </div>
        @endforeach

        <div style="font-size: 20px">
            {{ $dulieu->links('vendor.pagination.bootstrap-5') }}
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#orderby').on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        })
    })
    // $(function(){
    //     $('#orderby').change(function(){
    //         $('#form_order').submit()
    //     })
    // })
</script>

@endsection