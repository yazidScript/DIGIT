<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Admin;
use \App\karyawan;
use DB,Hash;
use Auth;
use View;

class AdminController extends Controller
{


public function loginadmin(Request $request)
{
  $datas = Admin::where('username', request('username'))->get();

  foreach( $datas as $data ){
    $pswdlower = strtolower(request('password'));
    $password = $data->password;
    if( $data->username == request('username') ){
      if( $pswdlower == $password ){
        request()->session()->put('admin-logged', $data->username);
        return redirect('dashboard')->with('sukses','Berhasil masuk di DIGIT TEAMS');
      }
    }

  }
  return back();
}
public function logoutadmin()
{
  Auth::Logout();
  request()->session()->forget('admin-logged');
  return redirect('/login-admin');
}


  //dashboard admin
  public function dashboard(Request $request)
  {
    $count = Karyawan::count();
    return View::make('admin.dashboard')->with('count', $count);
  }



   //Karyawan

   public function karyawan(Request $request){

     $data_karyawan = Karyawan::all();
     return view('admin.Karyawan/karyawan')->with(compact('data_karyawan'));
   }
    public function tambah()
    {
       return view('admin.Karyawan/tambah');
    }
    public function tambahkaryawan(Request $request)
    {
      $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'posisi' => 'required',
        'alamat' => 'required',
        'notlp' =>'required|max:12',
        'foto' => 'mimes:jpeg,jpg,png'
      ]);
      $filename = time() . '.' . $request->file('foto')->getClientOriginalExtension();
      $request->file('foto')->move('images.karyawan', $filename);

      $g = Karyawan::insert([
          'nama' =>$request->nama,
          'email' => $request->email,
          'notlp'=>$request->notlp,
          'posisi'=>$request->posisi,
          'alamat'=>$request->alamat,
          'foto' => $filename,
      ]);
    return redirect("/dashboard/karyawan")->with('sukses','data berhasil di tambah');
    }
    public function editkaryawan($id)
    {
      $karyawan = Karyawan::find($id);
      return view('admin.Karyawan.edit')->with(compact('karyawan'));
    }
    public function updatekaryawan(Request $request,$id)
    {
      $new_image = $request->new_image;
      $old_image = $request->old_image;
      if(!isset($new_image)){
        DB::table('karyawan')->where('id',$id)->update([
             'nama' => $request->up_nama,
             'email' => $request->up_email,
             'notlp' => $request->up_notlp,
             'posisi' => $request->up_posisi,
             'alamat' => $request->up_alamat,
              'foto' => $old_image
            ]);
      }else{
        $filename = time() . '.' .$request->file('new_image')->getClientOriginalName();
        $request->file('new_image')->move('images.karyawan', $filename);
        DB::table('karyawan')->where('id',$id)->update([
             'nama' => $request->up_nama,
             'email' => $request->up_email,
             'notlp' => $request->up_notlp,
             'posisi' => $request->up_posisi,
             'alamat' => $request->up_alamat,
              'foto' => $filename
            ]);
      }
      return redirect('/dashboard/karyawan')->with('sukses','data berhasil di update');
    }
    public function deletekaryawan($id)
    {
      Karyawan::where('id',$id)->delete();
      return redirect('/dashboard/karyawan')->with('sukses','sukses delete data');
    }
}
