@extends('layouts.masteradmin')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="/Admin/css/jquery.fancybox-1.3.4.css">
<div class="row m-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Karyawan</h3>

                <div class="card-tools">
                  <div class="input-group-append ml-3 mr-2 mt-1">
                      <a href="/karyawan/tambah-karyawan"><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telephone</th>
                      <th>Posisi</th>
                      <th>Alamat</th>

                    </tr>
                  </thead>
                  @foreach($data_karyawan as $p )
                  <tbody>
                    <tr>
                        <td>{{$p->id}}</td>
                        <td><a data-fancybox="gallery" href="../images.karyawan/{{ $p->foto }}"><img src="../images.karyawan/{{ $p->foto }}" class="ml-4" width="60px" height="60px"></td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->notlp}}</td>
                        <td>{{$p->posisi}}</td>
                        <td>{{$p->alamat}}</td>
                      </td>
                      <td>
                        <a href="/karyawan/{{$p->id}}/edit-karyawan" class="btn btn-sm btn-warning mb-1">Edit</a>
                        <a href="/karyawan/{{$p->id}}/deletekaryawan" class="btn btn-sm btn-danger">delete</a>
                      </td>

                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <script src="/Admin/js/jquery.fancybox-1.3.4.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
          $("gallery.fancybox").fancybox();
        });
      </script>

 @stop
