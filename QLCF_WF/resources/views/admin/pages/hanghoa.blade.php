@extends('admin.index')
@section('content')
<div class="card mb-4 mt-5 mb-5" >
    <div class="card-header"  >
        <i class="fas fa-table me-1" ></i>
        Hàng hóa
    </div>
    <div class="card-body "  >
        <div class="text-primary">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Thêm sản phẩm
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title " id="exampleModalLabel" >Thêm sản phẩm</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
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
                            {!! Form::open(['method' => 'post','url'=>'nhap-hang-hoa','files'=>true]) !!}
                            <div>


                                {{Form::label('tenhang','Tên hàng')}}
                                {{Form::text('tenhang','',['class'=>'form-control mb-2','placeholder'=>'Nhập tên hàng hóa'])}}

                                {{Form::label('dongia','Đơn giá')}}
                                {{Form::number('dongia','',['class'=>'form-control mb-2','placeholder'=>'Nhập đơn giá'])}}

                                {{Form::label('mota','Mô tả')}}
                                {{Form::text('mota','',['class'=>'form-control mb-2','placeholder'=>'Nội dung'])}}

                                {{Form::label('loai','Loại')}}
                                {{Form::select('loai',$maloai,'',['class'=>'form-control mb-2'])}}

                                {{Form::label('anh','Ảnh sản phẩm')}}
                                {{Form::file('anh',['class'=>'form-control mb-2'])}}
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <div>
                                {{Form::submit('Thêm hàng',['class'=>'btn btn-primary mt-3 mb-3'])}}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Stt</th>
                        <th scope="col">Tên hàng hóa</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Ngày nhập</th>
                        <th scope="col">Cập nhật</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; ?>
                    @foreach($hanghoa as $item)
                    <tr>
                        <td>{{$stt++}}</td>
                        <td>{{$item->tenhh}}</td>
                        <td>{{$item->dongia}}</td>
                        <td>{{$item->mota}}</td>
                        <td style="display: flex;justify-content: center;"><img src="{{$item->anh}}" style="height:50px; width:50px; object-fit:cover; overflow:hidden;" alt=""></td>
                        <td>{{$item->tenloai}}</td>
                        <td>{{$item->ngaylap}}</td>
                        <td>
                        <a href="{{asset('/cap-nhat-hang-hoa/'.$item->mahh)}}" class="btn btn-info text-white mt-3" >Cập nhật</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'post','url'=>['xoa-hang-hoa']]) !!}
                            <div>
                                {{Form::hidden('mahh',$item->mahh)}}
                                {{Form::submit('Xóa',[ 'class'=>'btn btn-danger mt-3 mb-3','onclick'=>'return confirm("Bạn có thực sự muốn xóa không")'])}}
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