@extends('Main/tampilan')
@section('title', 'Pendataan Penduduk')
@section('container')
  
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendataan Penduduk</h1>
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
                <div class="float-left">
                  <button type="button" class="btn btn-sm bg-dark" data-toggle="modal" data-target="#modal-lg">
                    Tambah Penduduk
                  </button>
                </div>
                <div class="card-tools">
                  <form class="input-group input-group-sm"  method="GET" action="/penduduk">
                    <input name="cari" class="form-control float-right" type="text" placeholder="Masukan Nama Penduduk">
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
                            <h4 class="modal-title">Tambah Penduduk</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form role="form" method="post" action="/penduduk/tpenduduk">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="kk_id">Nomor Sistem KK</label>
                                <input type="text" class="form-control" id="kk_id" value="0" name="kk_id">
                              </div>
                              <div class="form-group">
                                <label for="nama">NIK</label>
                                <input type="text" class="form-control" id="nama" name="NIK">
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                              </div>
                              <div class="form-group">
                                <label for="kelamin">Kelamin</label>
                                <input type="text" class="form-control" id="kelamin" name="kelamin">
                              </div>
                              <div class="form-group">
                                <label for="ttl">TTL</label>
                                <input type="text" class="form-control" id="ttl" name="ttl">
                              </div>
                              <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama">
                              </div>
                              <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                              </div>
                              <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                              </div>
                              <div class="form-group">
                                <label for="goldarah">Golongan Darah</label>
                                <input type="text" class="form-control" id="goldarah" name="goldarah">
                              </div>
                              <div class="form-group">
                                <label for="stskawin">Status Kawin</label>
                                <input type="text" class="form-control" id="stskawin" name="stskawin">
                              </div>
                              <div class="form-group">
                                <label for="tglkawin">Tanggal Kawin</label>
                                <input type="text" class="form-control" id="tglkawin" name="tglkawin">
                              </div>
                              <div class="form-group">
                                <label for="stskeluarga">Status Keluarga</label>
                                <input type="text" class="form-control" id="stskeluarga" name="stskeluarga">
                              </div>
                              <div class="form-group">
                                <label for="warga">Warga Negara</label>
                                <input type="text" class="form-control" id="warga" name="warga">
                              </div>
                              <div class="form-group">
                                <label for="ayah">Ayah</label>
                                <input type="text" class="form-control" id="ayah" name="ayah">
                              </div>
                              <div class="form-group">
                                <label for="ibu">Ibu</label>
                                <input type="text" class="form-control" id="ibu" name="ibu">
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
                      <th>No Sistem</th>
                      <th>No Sistem KK</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Kelamin</th>
                      <th>TTL</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach ($anggota as $agt)
                        <td>{{$agt->id_ak}}</td>
                        <td>{{$agt->kk_id}}</td>
                        <td>{{$agt->NIK}}</td>
                        <td>{{$agt->nama}}</td>
                        <td>{{$agt->ttl}}</td>
                        <td>{{$agt->kelamin}}</td>
                        <td>
                          <a href="/penduduk/{{$agt->id_ak}}/ubahpenduduk" class="badge badge-primary">Ubah</a>
                            <span style="color:grey">|</span>
                          <a href="/penduduk/{{$agt->id_ak}}/hapus" class="badge badge-danger">Hapus</a>
                        </td>
                    <tr>
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
