@extends('layouts.masteradmin')
@section('content')
<div class="row">
          <div class="col-lg-3 col-6 ml-3 mt-3">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$count}}</h3>

                <p>Karyawan</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="/dashboard/karyawan" class="small-box-footer">
                Info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
@stop
