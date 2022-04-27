@extends('admin.index')
@section('content')
<!-- Thông báo lỗi -->
@if(count($errors)>0)
<h3>Lỗi</h3>
@foreach($errors->all() as $error)
<span class="text-danger">{{$error}}</span><br>
@endforeach
@endif
@if(isset($mess))
<!-- thông báo thành công cần chuyển qua alert -->
<span class=text-success>{{$mess}}</span><br>
@endif
{!! Form::open(['url'=>['cap-nhat-hang-hoa',$item[0]->mahh],'files'=>true,'method' => 'post' ]) !!}
<div>


    {{Form::label('tenhang','Tên hàng')}}
    {{Form::text('tenhang',$item[0]->tenhh,['class'=>'form-control mb-2','placeholder'=>'Nhập tên hàng hóa'])}}

    {{Form::label('dongia','Đơn giá')}}
    {{Form::number('dongia',$item[0]->dongia,['class'=>'form-control mb-2','placeholder'=>'Nhập đơn giá'])}}

    {{Form::label('mota','Mô tả')}}
    {{Form::text('mota',$item[0]->mota,['class'=>'form-control mb-2','placeholder'=>'Nội dung'])}}

    {{Form::label('loai','Loại')}}
    {{Form::select('loai',$maloai,$item[0]->maloai,['class'=>'form-control mb-2'])}}

    <div>
        {{Form::submit('Cập nhật',['class'=>'btn btn-primary mt-3 mb-3'])}}
    </div>
    {!! Form::close() !!}
</div>
@endsection