@extends('admin.index')
@section('content')
    
    {!! Form::open(['method' => 'post','url'=>['cap-nhat-danh-muc-hang',$item[0]->mamuc]]) !!}
<div>
    
    {{Form::label('tenmuc','Tên danh mục',['class' => 'h5'])}}
    {{Form::text('tenmuc',$item[0]->tenmuc,['class'=>'form-control ','placeholder'=>'Nhập tên danh mục'])}}
</div>



<div>
    {{Form::submit('Cập Nhật',['class'=>'btn btn-primary mt-3 mb-3'])}}
</div>
{!! Form::close() !!}
@endsection