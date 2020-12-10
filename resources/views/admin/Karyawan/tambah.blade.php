@extends('layouts.masteradmin')
@section('content')

<div class="container " id="booking-id">
<div class="row justify-content-center m-auto">
   <div class="col-md-8">
       <div class="card">
           <div class="card-header bg-primary text-white text-left">Karyawan</div>

           <div class="card-body">
               <form method="POST" action="/karyawan/tambah-karyawan" enctype="multipart/form-data">
                   {{csrf_field()}}
                   <div class="form-group row">
                       <label for="nama" class="col-md-4 col-form-label text-md-right" id="nama">Nama</label>
                       <div class="col-md-6">
                       <input name="nama" type="text" class="form-control" id="nama" value="{{ old('nama') }}">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('nama') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                       <div class="col-md-6">
                       <input name="email" type="text" class="form-control" id="penulis" value="{{ old('email') }}">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('email') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="notlp" class="col-md-4 col-form-label text-md-right">No Telephone</label>
                       <div class="col-md-6">
                       <input name="notlp" type="text" class="form-control" rows="3" id="notlp" value="{{ old('notlp') }}" >
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('notlp') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="posisi" class="col-md-4 col-form-label text-md-right">Posisi</label>
                       <div class="col-md-6">
                       <input name="posisi" type="text" class="form-control" rows="3" id="posisi" value="{{ old('posisi') }}" >
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('posisi') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                       <div class="col-md-6">
                       <textarea name="alamat" type="text" class="form-control" rows="3" id="alamat" value="{{ old('alamat') }}" ></textarea>
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('alamat') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
                       <div class="col-md-6">
                       <input name="foto" type="file" class="form-control" value="{{ old('foto') }}" required id="foto">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('foto') }}</span>
                   </div>
                   <div class="text-center">
                           <button class="btn btn-primary btn-block my-4 mx-auto col-md-10" type="submit">Tambah</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
@stop
