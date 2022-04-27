@extends('admin.index')
@section('content')

{!! Form::open(['method' => 'post','url'=>['cap-nhat-loai-hang',$item[0]->maloai]]) !!}
<div>

    {{Form::label('tenloai','Tên loại',['class' => 'h5'])}}
    {{Form::text('tenloai',$item[0]->tenloai,['class'=>'form-control ','placeholder'=>'Nhập tên loại'])}}
    {{Form::label('mamuc','Danh mục')}}
    {{Form::select('mamuc',$mamuc,$item[0]->mamuc,['class'=>'form-control mb-2'])}}
</div>



<div>
    {{Form::submit('Cập Nhật',['class'=>'btn btn-primary mt-3 mb-3'])}}
</div>
{!! Form::close() !!}
@endsection