<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class hangHoaController extends Controller
{
    //
    public function NhapHang(Request $request){
        $message=[];
        $validator=Validator::make($request->all(),[
            'tenhang'=>'required | max:60 | unique:hanghoa,"tenhh"',
            'dongia'=>'required | max:15',
            'loai'=>'required',
            'anh'=>'required|mimes:jpg,jpeg,png,gif| max:5000',
        ],$message);
        if($validator->fails()){
            return redirect('/hang-hoa')->withErrors($validator)->withInput();
        }
        else{
            $tenhh=$request->input('tenhang');
            $dongia=$request->input('dongia');
            $mota=$request->input('mota');
            $loai=$request->input('loai');
            $anh=$request->file('anh');
            $ngaylap=date('Y/m/d');
            $storePath=$anh->move('public/assets/images',time().'_'.$anh->getClientOriginalName());
            DB::insert('insert into hanghoa(tenhh,dongia,mota,anh,maloai,ngaylap) values(?,?,?,?,?,?)',[$tenhh,$dongia,$mota,$storePath,$loai,$ngaylap]);
            $maloai=DB::table('loai')->pluck('tenloai','maloai');
            //dữ liệu hiển thị
            $hanghoa = DB::table('hanghoa')
            ->join('loai', 'hanghoa.maloai', '=', 'loai.maloai')
            ->select('hanghoa.*', 'loai.tenloai')
            ->get();
            
            return view('admin/pages/hanghoa',['mess'=>'Nhập thành công!','maloai'=>$maloai,'hanghoa'=>$hanghoa]);
        }
    }
    //dữ liệu hiển thị
    public function DataHangHoa(){
        $maloai=DB::table('loai')->pluck('tenloai','maloai');
        $hanghoa = DB::table('hanghoa')
            ->join('loai', 'hanghoa.maloai', '=', 'loai.maloai')
            ->select('hanghoa.*', 'loai.tenloai')
            ->get();

       
        return view('admin/pages/hanghoa',['maloai'=>$maloai,'hanghoa'=>$hanghoa]);
    }
    //xóa hàng hóa
    public function DeleteHangHoa(Request $request)
    {
        $mahh=$request->input('mahh');
        $deleted = DB::table('hanghoa')->where('mahh',$mahh)->delete();
        return redirect("/hang-hoa");
    }
    //update hàng hóa
    public function EditHanghoa($mahh){
        $item=DB::select("select * from hanghoa where mahh=?",[$mahh]);
        $maloai=DB::table('loai')->pluck('tenloai','maloai');
        return view('admin.pages.edithanghoa',['item'=>$item,'maloai'=>$maloai]);
    }
    //update hàng hóa post
    public function CapNhatHangHoa(Request $request,$mahh){
        $message=[];
        $validator=Validator::make($request->all(),[
            'tenhang'=>'required | max:60',
            'dongia'=>'required | numeric',
            'loai'=>'required',
            
        ],$message);
        if($validator->fails()){
            return redirect('/cap-nhat-hang-hoa')->withErrors($validator)->withInput();
        }
        else{
            $tenhh=$request->input('tenhang');
            $dongia=$request->input('dongia');
            $mota=$request->input('mota');
            $loai=$request->input('loai');
            DB::update('update hanghoa set tenhh = ?,dongia = ?,mota = ?,maloai=? where mahh = ?',[$tenhh,$dongia,$mota,$loai,$mahh]);
           
            return redirect("/hang-hoa");
        }
    }
}
