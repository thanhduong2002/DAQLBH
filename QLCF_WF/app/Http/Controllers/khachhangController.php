<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class khachhangController extends Controller
{
    public function listkhachhang(){
        $user=DB::select('select * from users where role=0');
        return view('admin/pages/qlkhachhang',['user'=>$user]);
    }
    public function xoakhachhang(Request $request){
        $makh=$request->input('makh');
        $deleted = DB::table('users')->where('id',$makh)->delete();
        return redirect('/khach-hang');
    }
}
