@extends('Main/tampilan')
@section('title', 'Pengecekan KTP')
@section('container')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Konfirmasi</h1>
          </div>
        </div>
      </div>
    </div>

            @if(session('notif'))
              <div class="alert alert-success alert-dismissible fade show"  role="alert">
              {{session('notif')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            @endif

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">

              <div class="card-header">
              
                <div class="card-tools">
                  <form class="input-group input-group-sm"  method="GET" action="/konfirmasi">
                    <input name="cari" class="form-control float-right" type="text" placeholder="Nama Pengunjung">
                    <div class="input-group-append">
                      <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </form> 
                </div>

              </div>

              <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pengecek</th>
                      <th>Nama Pengunjung</th>
                      <th>Keterangan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $konfirmasi as $ki)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$ki->namac}}</td>
                      <td>{{$ki->namap}}</td>
                      <td>{{$ki->keterangan}}</td>
                      @php
                      if($ki->status == 'PROSES'):
                      $color = 'badge bg-warning';
                      elseif ($ki->status == 'SELESAI'):
                      $color = 'badge bg-success';
                      endif;
                      @endphp
                      <td class="{{$color}}">{{$ki->status}}</td>
                      <td>
                        <a href="/konfirmasi/{{$ki->id}}/skonfirmasi" class="badge bg-teal">Konfirmasi</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    
@endsection
