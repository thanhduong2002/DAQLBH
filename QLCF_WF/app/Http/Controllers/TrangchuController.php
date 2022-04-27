<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrangChuController extends Controller
{
    public function listhanghoa(){
        // $hanghoa=DB::select('select * from hanghoa order by mahh DESC limit 8');
        $hanghoa = DB::table('hanghoa')
            ->select('*')
            ->orderBy('mahh','DESC')
            ->paginate(8);
        return view('client/home',['hanghoa'=>$hanghoa]);
    }
    
    
}
