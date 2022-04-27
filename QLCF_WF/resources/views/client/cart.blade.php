@extends('template.mytemplate')
@section('content')

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        @foreach(session('cart') as $mahh => $details)
        @php $total += $details['dongia'] * $details['quantity'] @endphp
        <tr data-id="{{ $mahh }}">
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{ asset($details['anh']) }}" width="100" height="100" class="img-responsive" /></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $details['tenhh'] }}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">{{ number_format($details['dongia'],0) }}đ</td>
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
            </td>
            <td data-th="Subtotal" class="text-center">{{ number_format($details['dongia'] * $details['quantity'],0) }}đ</td>
            <td class="actions" data-th="">
                <!-- xóa sp trong giỏ hàng -->
                {!! Form::open(['method' => 'post','url'=>['remove-from-cart']]) !!}
                <div>
                    {{Form::hidden('mahh',$details['mahh'])}}
                    {{Form::submit('Xóa',['class'=>'btn btn-danger mt-3 mb-3','onclick'=>'return confirm("Bạn có thực sự muốn xóa không")'])}}
                </div>
                {!! Form::close() !!}

            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <h3><strong>Total {{ number_format($total,0) }}đ</strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ asset('/home') }}"  class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger" ><a href="{{asset('/thanh-toan/'.$total)}}" style="color: #fff">Thanh toán</a></button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('script')
<script type="text/javascript">
    $(".update-cart").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ asset("update-cart") }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
</script>
@endsection