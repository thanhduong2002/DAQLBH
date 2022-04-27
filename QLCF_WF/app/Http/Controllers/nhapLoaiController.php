<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class nhapLoaiController extends Controller
{
    //
    public function NhapLoai(Request $request){
        $message=[];
        $validator=Validator::make($request->all(),[
            'tenloai'=>'required | max:50 | unique:loai,"tenloai"'
        ],$message);
        if($validator->fails()){
            return redirect('/loai-hang')->withErrors($validator)->withInput();
        }
        else{
            
            $tenloai=$request->input('tenloai');
            $muc=$request->input('mamuc');
            DB::insert('insert into loai(tenloai,mamuc) values(?,?)',[$tenloai,$muc]);
            $mamuc=DB::table('danhmuc')->pluck('tenmuc','mamuc');

            $loai = DB::select('select a.maloai,a.tenloai,b.tenmuc from loai a,danhmuc b where a.mamuc=b.mamuc');
            $stt=1;
            return view('admin/pages/loai',['mess'=>'Nhập thành công!','loai'=>$loai,'stt'=>$stt,'mamuc'=>$mamuc]);
        }
    }
    public function DataLoaiHang(){
        $mamuc=DB::table('danhmuc')->pluck('tenmuc','mamuc');
        $loai = DB::select('select a.maloai,a.tenloai,b.tenmuc from loai a,danhmuc b where a.mamuc=b.mamuc');
        
        $stt=1;
        return view('admin/pages/loai',['mamuc'=>$mamuc,'loai'=>$loai,'stt'=>$stt]);
    }
    //xóa loại hàng
    public function DeleteLoai(Request $request)
    {
        $maloai=$request->input('maloai');
        $deleted = DB::table('loai')->where('maloai',$maloai)->delete();
        return redirect("/loai-hang");
    }
    //cập nhật loại hàng
    public function edit($id)
    {
        $item = DB::select('select * from loai where maloai = ?',[$id]);
        $mamuc=DB::table('danhmuc')->pluck('tenmuc','mamuc');
        return view('admin/pages/editLoai',['item'=>$item,'mamuc'=>$mamuc]);
    }
    public function CapNhatLoai(Request $request,$id)
    {
        $tenloai=$request->input('tenloai');
        $mamuc=$request->input('mamuc');
        DB::update('update loai set tenloai = ?, mamuc = ? where maloai = ?',[$tenloai,$mamuc,$id]);
        return redirect("/loai-hang");
    }
}
