@extends('admin.index')
@section('content')
<div class="card mb-4 mt-5 mb-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh mục
    </div>
    <div class="card-body">
        <div class="text-success">
            @if(count($errors)>0)
            <h3>Lỗi</h3>
            @foreach($errors->all() as $error)
            <span class="text-danger">{{$error}}</span><br>
            @endforeach
            @endif
            @if(isset($mess))
            <span class=text-success>{{$mess}}</span><br>
            @endif
            <!-- Button trigger modal -->
            {!! Form::open(['method' => 'POST','url'=>'nhap-danh-muc-hang']) !!}
            <div>

                {{Form::label('tenmuc','Tên danh muc',['class' => 'h5'])}}
                {{Form::text('tenmuc','',['class'=>'form-control w-25','placeholder'=>'Nhập tên danh mục'])}}

            </div>
            <div>
                {{Form::submit('Thêm danh mục',['class'=>'btn btn-success mt-3 mb-3'])}}
            </div>
            {!! Form::close() !!}


        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Cập nhật</th>
                        <th scope="col">Xóa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($danhmuc as $item)
                    <tr>

                        <td width="100px">{{$stt++}}</td>
                        <td>{{$item->tenmuc}}</td>
                        <td width="150px">
                            <a href="{{asset('/cap-nhat-danh-muc-hang/'.$item->mamuc)}}" class="btn btn-info text-white mt-3">Cập nhật</a>
                        </td>
                        <td width="150px">
                            {!! Form::open(['method' => 'post','url'=>['xoa-danh-muc']]) !!}
                            <div>
                                {{Form::hidden('mamuc',$item->mamuc)}}
                                {{Form::submit('Xóa',['class'=>'btn btn-danger mt-3 mb-3','onclick'=>'return confirm("Bạn có thực sự muốn xóa không")'])}}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection