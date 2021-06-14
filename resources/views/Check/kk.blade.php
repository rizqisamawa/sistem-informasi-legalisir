@extends('Main/tampilan')
@section('title', 'Pengecekan Kartu Keluarga')
@section('container')
  
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pencarian Data Kartu Keluarga</h1>
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
                  <button type="button" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#modal-lg">
                    Buat Kartu Keluarga
                  </button>
                </div>
              @endif
                <div class="card-tools">
                  <form class="input-group input-group-sm"  method="GET" action="/kk">
                    <input name="cari" class="form-control float-right" type="text" placeholder="Masukan Nomor KK">
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
                            <h4 class="modal-title">Buat Kartu Keluarga</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form role="form" method="post" action="/kk/tkk">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="ns">Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control" id="ns" name="no_kk">
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" id="nama" name="nama_kk">
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                              </div>
                              <div class="form-group">
                                <label for="rtrw">RT / RW</label>
                                <input type="text" class="form-control" id="rtrw" name="rtrw">
                              </div>
                              <div class="form-group">
                                <label for="kodepos">Kodepos</label>
                                <input type="text" class="form-control" id="kodepos" name="kodepos">
                              </div>
                              <div class="form-group">
                                <label for="desa">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa">
                              </div>
                              <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                              </div>
                              <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota">
                              </div>
                              <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi">
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn bg-warning">Simpan</button>
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
                      <th style="width: 10px">No Sistem</th>
                      <th style="width: 10px">No KK</th>
                      <th>Nama Kepala Keluarga</th>
                      <th>Alamat</th>
                      <th>Rt/Rw</th>
                      <th>Kode Pos</th>
                      <th>Desa</th>
                      <th>Kecamatan</th>
                      <th>Kota</th>
                      <th>Provinsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($kk as $k)
                  <tr>
                    <td>{{$k->id}}</td>
                    <td>{{$k->no_kk}}</td>
                    <td><a href="/kk/{{$k->id}}/dtlkk">{{$k->nama_kk}}</a></td>
                    <td>{{$k->alamat}}</td>
                    <td>{{$k->rtrw}}</td>
                    <td>{{$k->kodepos}}</td>
                    <td>{{$k->desa}}</td>
                    <td>{{$k->kecamatan}}</td>
                    <td>{{$k->kota}}</td>
                    <td>{{$k->provinsi}}</td>
                    @if(auth()->user()->role =='admin')
                    <td>
                      <a href="/kk/{{$k->id}}/ubahkk" class="badge badge-warning">Ubah</a>
                      <span style="color:grey">|</span>
                      <a href="/kk/{{$k->id}}/hapus" class="badge badge-danger">Hapus</a>
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
