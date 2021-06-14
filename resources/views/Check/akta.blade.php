@extends('Main/tampilan')
@section('title', 'Pengecekan AKTA Kelahiran')
@section('container')
  
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pencarian Data Akta Kelahiran</h1>
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
              @if(auth()->user()->role =='admin')
                <div class="float-left">
                  <button type="button" class="btn btn-sm bg-teal" data-toggle="modal" data-target="#modal-lg">
                    Buat Akta Kelahiran
                  </button>
                </div>
              @endif
                <div class="card-tools">
                  <form class="input-group input-group-sm"  method="GET" action="/akta">
                    <input name="cari" class="form-control float-right" type="text" placeholder="Masukan Nomor AKTA">
                    <div class="input-group-append">
                      <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </form> 
                </div>
              </div>

                    <div class="modal fade" id="modal-lg">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Buat Akta Kelahiran</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form role="form" method="post" action="/akta/takta">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="id_ak">Nomor Sistem Penduduk</label>
                                <input type="text" class="form-control" placeholder="Masukan Nomor Sistem Penduduk" id="id_ak" name="id_ak">
                              </div>
                              <div class="form-group">
                                <label for="no_akta">Nomor Akta Kelahiran</label>
                                <input type="text" class="form-control" placeholder="Masukan Nomor Akta Kelahiran" id="no_akta" name="no_akta">
                              </div>
                              <div class="form-group">
                                <label for="anak_ke">Urutan Nomor Anak Kelahiran</label>
                                <input type="text" class="form-control" placeholder="Masukan Nomor Anak Kelahiran" id="anak_ke" name="anak_ke">
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn bg-teal">Simpan</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>

              <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap text-center">
                  <thead>
                    <tr>
                      <th style="width: 10px">No AKTA</th>
                      <th>TTL</th>
                      <th>Nama</th>
                      <th>Anak Ke</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $akta as $ak)
                    <tr>
                      <td>{{$ak->no_akta}}</td>
                      <td>{{$ak->ttl}}</td>
                      <td>{{$ak->nama}}</td>
                      <td>{{$ak->anak_ke}}</td>
                      @if(auth()->user()->role =='admin')
                      <td>
                        <a href="/akta/{{$ak->id}}/ubahakta" class="badge bg-teal">Ubah</a>
                        <span style="color:grey">|</span>
                        <a href="/akta/{{$ak->id}}/hapus" class="badge badge-danger">Hapus</a>
                      </td>
                      @endif
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
