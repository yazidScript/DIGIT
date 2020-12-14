<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\karyawan;
use DB,Hash;
use Auth;


class FrontendController extends Controller
{
    public function homekaryawan(Request $request)
    {
      $data_karyawan = Karyawan::all();
      return view ('user.karyawan')->with(compact('data_karyawan'));
    }

    public function detail($id)
    {
      $karyawan = Karyawan::find($id);
      return view ('user.detail-karyawan',['karyawan' => $karyawan]);
    }
}
