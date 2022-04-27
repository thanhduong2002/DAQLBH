@extends('admin.index')
@section('content')
<div class="card mb-4 mt-5 mb-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Khách hàng
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Stt</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=1; ?>
                    @foreach($user as $kh)
                    <tr>
                        <td>{{$stt++}}</td>
                        <td>{{$kh->name}}</td>
                        <td>{{$kh->email}}</td>
                        <td>{{$kh->password}}</td>
                        <td>{{$kh->created_at}}</td>
                        <td>{{$kh->updated_at}}</td>
                        
                        <td>
                            {!! Form::open(['method' => 'post','url'=>['xoa-khach-hang']]) !!}
                            <div>
                                {{Form::hidden('makh',$kh->id)}}
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