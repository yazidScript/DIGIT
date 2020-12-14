@extends('layouts.master')
@section('content')
<div class="container mt-5 mb-5">
   <h5>Daftar Karyawan</h5>
  <div class="row">
      @foreach($data_karyawan as $data)
    <div class="py-3 col-md-4">
    <div class="card container">
      <img class="rounded-circle container mt-3 mb-1" style="width:130px;height:100px;" src="../images.karyawan/{{$data->foto}}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title text-center"><strong><a href="/karyawan/{{$data->id}}/detail-karyawan" style="color:black">{{$data->nama}}</a></strong></h4>
        <h6 class="font-weight-bold indigo-text py-2 text-center">{{$data->posisi}}</h6>
        <div class="container text-center">
          <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
          <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
          <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
        </div>
      </div>
    </div>
    </div>
       @endforeach
    </div>
  </div>
@stop
