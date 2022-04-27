@extends('admin.index')
@section('content')
<div class="card mb-4 mt-5 mb-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Loại hàng hóa
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
            {!! Form::open(['method' => 'POST','url'=>'nhap-loai-hang']) !!}
            <div>

                {{Form::label('tenloai','Tên loại',['class' => 'h5'])}}
                {{Form::text('tenloai','',['class'=>'form-control w-25','placeholder'=>'Nhập tên loại'])}}
                {{Form::label('mamuc','Danh mục')}}
                {{Form::select('mamuc',$mamuc,'',['class'=>'form-control mb-2 w-25'])}}
            </div>
            <div>
                {{Form::submit('Thêm loại',['class'=>'btn btn-success mt-3 mb-3'])}}
            </div>
            {!! Form::close() !!}


        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tên loại</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Cập nhật</th>
                        <th scope="col">Xóa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($loai as $item)
                    <tr>

                        <td width="100px">{{$stt++}}</td>
                        <td>{{$item->tenloai}}</td>
                        <td>{{$item->tenmuc}}</td>
                        <td width="150px">
                            <a href="{{asset('/cap-nhat-loai-hang/'.$item->maloai)}}" class="btn btn-info text-white mt-3">Cập nhật</a>
                        </td>
                        <td width="150px">
                            {!! Form::open(['method' => 'post','url'=>['xoa-loai-hang']]) !!}
                            <div>
                                {{Form::hidden('maloai',$item->maloai)}}
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