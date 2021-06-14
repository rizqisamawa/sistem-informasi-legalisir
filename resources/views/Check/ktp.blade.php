@extends('Main/tampilan')
@section('title', 'Pengecekan KTP')
@section('container')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pencarian Data Kartu Tanda Penduduk</h1>
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
                  <button type="button" class="btn btn-sm bg-olive" data-toggle="modal" data-target="#modal-lg">
                    Buat Kartu Tanda Penduduk
                  </button>
                </div>
              @endif
                <div class="card-tools">
                  <form class="input-group input-group-sm"  method="GET" action="/ktp">
                    <input name="cari" class="form-control float-right" type="text" placeholder="Masukan Nomor NIK">
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
                            <h4 class="modal-title">Buat Kartu Tanda Penduduk</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form role="form" method="post" action="/ktp/tktp">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="id_ak">Nomor Sistem Penduduk</label>
                                <input type="text" class="form-control" placeholder="Masukan Nomor Sistem Penduduk" id="id_ak" name="id_ak">
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" placeholder="Masukan Alamat" id="alamat" name="alamat">
                              </div>
                              <div class="form-group">
                                <label for="berlaku">Berlaku</label>
                                <input type="text" class="form-control" id="berlaku" name="berlaku">
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
                      <th style="width: 10px">NIK</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Kelamin</th>
                      <th>GDarah</th>
                      <th>Alamat</th>
                      <th>Agama</th>
                      <th>Status</th>
                      <th>Pekerjaan</th>
                      <th>Warganegara</th>
                      <th>Berlaku</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($ktp as $kp)
                    <tr>
                      <td>{{$kp->NIK}}</td>
                      <td>{{$kp->nama}}</td>
                      <td>{{$kp->ttl}}</td>
                      <td>{{$kp->kelamin}}</td>
                      <td>{{$kp->goldarah}}</td>
                      <td>{{$kp->alamat}}</td>
                      <td>{{$kp->agama}}</td>
                      <td>{{$kp->stskawin}}</td>
                      <td>{{$kp->pendidikan}}</td>
                      <td>{{$kp->warga}}</td>
                      <td>{{$kp->berlaku}}</td>
                      @if(auth()->user()->role =='admin')
                      <td>
                        <a href="/ktp/{{$kp->id}}/ubahktp" class="badge bg-olive">Ubah</a>
                        <span style="color:grey">|</span>
                        <a href="/ktp/{{$kp->id}}/hapus" class="badge badge-danger">Hapus</a>
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
