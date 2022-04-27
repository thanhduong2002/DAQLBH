<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class danhMucController extends Controller
{
    public function NhapDanhMuc(Request $request){
        $message=[];
        $validator=Validator::make($request->all(),[
            'tenmuc'=>'required | max:50 | unique:danhmuc,"tenmuc"'
        ],$message);
        if($validator->fails()){
            return redirect('/danh-muc')->withErrors($validator)->withInput();
        }
        else{
            
            $tenmuc=$request->input('tenmuc');
            DB::insert('insert into danhmuc(tenmuc) values(?)',[$tenmuc]);
            $danhmuc=DB::table('danhmuc')->select('*')->get();
            $stt=1;
            return view('admin/pages/danhmuc',['mess'=>'Nhập thành công!','danhmuc'=>$danhmuc,'stt'=>$stt]);
        }
    }
    public function DataDanhMuc(){
        $danhmuc=DB::table('danhmuc')->select('*')->get();
        $stt=1;
        return view('admin/pages/danhmuc',['danhmuc'=>$danhmuc,'stt'=>$stt]);
    }
    //xóa loại hàng
    public function XoaDanhMuc(Request $request)
    {
        $mamuc=$request->input('mamuc');
        $deleted = DB::table('danhmuc')->where('mamuc',$mamuc)->delete();
        return redirect("/danh-muc");
    }
    //cập nhật loại hàng
    public function SuaDanhMuc($id)
    {
        $item = DB::select('select * from danhmuc where mamuc = ?',[$id]);
        return view('admin/pages/editdanhmuc',['item'=>$item]);
    }
    public function CapNhatDanhMuc(Request $request,$id)
    {
        $tenmuc=$request->input('tenmuc');
        DB::update('update danhmuc set tenmuc = ? where mamuc = ?',[$tenmuc,$id]);
        return redirect("/danh-muc");
    }
}
