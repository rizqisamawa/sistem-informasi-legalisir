@extends('Main/tampilan')
@section('title', 'Halaman Data Pengarsipan')
@section('container')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pengarsipan</h1>
          </div>
        </div>
      </div>
    </div>
  
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            @if(session('notif'))
              <div class="alert alert-success alert-dismissible fade show"  role="alert">
              {{session('notif')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            @endif
  
                <div class="col-12">
                  <div class="card">

                    <div class="card-header">
                      <div class="float-left">
                        <a href="/data/export" class="btn btn-sm btn-success">Export Data</a>
                          <button type="button" class="btn btn-sm bg-navy" data-toggle="modal" data-target="#modal-lg">
                            Tambah Arsip
                          </button>
                      </div>
                      <div class="card-tools">
                        <form class="input-group input-group-sm"  method="GET" action="/data">
                            <input name="cari" class="form-control float-right" type="text" placeholder="Masukan Nama Arsip">
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
                            <h4 class="modal-title">Tambah Data Pengarsipan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form role="form" method="post" action="/data/tambah">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                              </div>
                              <div class="form-group">
                                <label for="jenis">Jenis Legalisir</label>
                                <select class="form-control" id="jenis" name="jenis">
                                  <option value="KTP">KTP</option>
                                  <option value="KK">KK</option>
                                  <option value="AKTA">AKTA</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="ns">Nomor Special</label>
                                <input type="text" class="form-control" id="ns" placeholder="Masukan Nomor Special" name="ns">
                              </div>
                              <div class="form-group">
                                <label for="keperluan">Keperluan Legalisir</label>
                                <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan Legalisir" name="keperluan">
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
                              </div>
                              <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                              </div>
                              <div class="form-group">
                                <label for="nohp">No HP</label>
                                <input type="text" class="form-control" id="nohp" placeholder="Masukan No HP" name="nohp">
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn bg-navy">Simpan</button>
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
                            <th style="width: 10px">No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Nomor Special</th>
                            <th>Keperluan</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach( $arsip as $arsp)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$arsp->nama}}</td>
                            <td>{{$arsp->jenis}}</td>
                            <td>{{$arsp->ns}}</td>
                            <td>{{$arsp->keperluan}}</td>
                            <td>{{$arsp->alamat}}</td>
                            <td>{{$arsp->tanggal}}</td>
                            <td>{{$arsp->nohp}}</td>
                            <td>
                            <a href="/data/{{$arsp->id}}/tganti" class="badge badge-primary">Ubah</a>
                            <span style="color:grey">|</span>
                            <a href="/data/{{$arsp->id}}/hapus" class="badge badge-danger">Hapus</a>
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
    </div>
    
@endsection