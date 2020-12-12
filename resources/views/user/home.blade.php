@extends('layouts.master')
@section('content')
<div class="container mt-5 mb-5">
  <div class="row">
    <!-- Card Wider -->
    @foreach($karyawan as $data)
    <div class="py-3 col-md-4">
      <div class="card card-cascade wider ">

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="../images.karyawan/{{$data->foto}}" alt="Card image cap">
          <a href="../images.karyawan/{{ $data->foto }}">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

          <!-- Title -->
          <h4 class="card-title"><strong>{{$data->nama}}</strong></h4>
          <!-- Subtitle -->
          <h5 class="blue-text pb-2"><strong>{{$data->posisi}}</strong></h5>
          <!-- Text -->
            <!-- Linkedin -->
            <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
            <!-- Twitter -->
            <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
            <!-- Dribbble -->
            <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

          </div>

        </div>
      </div>
       @endforeach
      <!-- Card Wider -->
    </div>
  </div>
@stop
