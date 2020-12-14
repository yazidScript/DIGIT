@extends('layouts.master')
@section('content')
<div class="row col-md-10 mx-auto">
  <div class="col-md-6 m-3 mx-auto ">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h3 class="profile-username text-center font-weight-bold">Detail Karyawan</h3>
            <ul class="list-group list-group-unbordered mb-3">
              <img class="rounded-circle container mt-1 mb-2" style="width:130px;height:100px;" src="{{url('/images.karyawan/'."$karyawan->foto")}}" alt="Card image cap">
              <li class="list-group-item">
                <b class="font-weight-bold">Nama Karyawan</b> <a class="float-right">{{$karyawan->nama}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Email</b> <a class="float-right">{{$karyawan->email}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">No Telephone</b> <a class="float-right">{{$karyawan->notlp}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Poisi Karyawan </b> <a class="float-right">{{$karyawan->posisi}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Alamat</b> <a class="float-right">{{$karyawan->alamat}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Social Media</b><div class="float-right">
                  <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                  <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                  <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
                </div>
              </li>
            </ul>
            <a href="/home/karyawan" class="btn btn-danger btn-sm btn-block" ><b>Kembali</b></a>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
</div>

@stop
