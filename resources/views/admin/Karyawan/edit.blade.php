@extends('layouts.masteradmin')
@section('content')

<div class="row m-2">
  <div class="modal-body">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edit Karyawan</h3>
      </div>
       <form action="/karyawan/{{$karyawan->id}}/updatekaryawan" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            {{csrf_field()}}
            <div class="form-group">
              
                <input type="file" name="new_image" />
                <img src=" {{url('/images.karyawan/'."$karyawan->foto")}}" class="img-thumbnail" width="100" />
                <input type="hidden" name="old_image" value="{{ $karyawan->foto }}" />
              <span style="color:red; margin-left: 240px">{{ $errors->first('foto') }}</span>
            </div>
            <div class="form-group">
              <input name="up_nama" type="text" class="form-control" id="exampleModal" placeholder="Nama" value="{{$karyawan->nama}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('nama') }}</span>
            </div>
            <div class="form-group">
              <input name="up_email" type="text" class="form-control" id="exampleModal" placeholder="Email" value="{{$karyawan->email}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group">
              <input name="up_notlp" type="text" class="form-control" id="exampleModal" placeholder="No Telepohone" value="{{$karyawan->notlp}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('notlp') }}</span>
            </div>
            <div class="form-group">
              <input name="up_posisi" type="text" class="form-control" id="exampleModal" placeholder="Posisi" value="{{$karyawan->posisi}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('posisi') }}</span>
            </div>
            <div class="form-group">
              <input name="up_alamat" type="text" class="form-control" id="exampleModal" placeholder="Alamat" value="{{$karyawan->alamat}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('alamat') }}</span>
            </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>

              </div>
            </div>
          </div>
        </form>
     </div>
    </div>
@stop
