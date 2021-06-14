@extends('Main/tampilan')
@section('title', 'Halaman Tambah Akun Pegawai')
@section('container')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          
        </div>
      </div>
    </div>
  
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

          @if(session('notif'))
            <div class="alert alert-primary alert-dismissible fade show"  role="alert">
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
                          <button type="button" class="btn btn-sm bg-indigo" data-toggle="modal" data-target="#modal-lg">
                            Buat Akun Baru
                          </button>
                      </div>
                      <div class="card-tools">
                        <form class="input-group input-group-sm"  method="GET" action="/takun">
                            <input name="cari" class="form-control float-right" type="text" placeholder="Masukan Username">
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
                            <h4 class="modal-title">Buat Akun Baru</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form role="form" method="post" action="/postakun">
                            @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="nama">Username</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Username" name="name">
                              </div>
                              <div class="form-group">
                                <label for="nama">Email</label>
                                <input type="email" class="form-control" id="nama" placeholder="Masukan Email" name="email">
                              </div>
                              <div class="form-group">
                                <label for="jenis">Password</label>
                                <input type="password" class="form-control" id="jenis" placeholder="Masukan Password" name="password">
                              </div> 
                              <div class="form-group">
                                <label for="jenis">Role</label>
                                <select class="form-control" id="jenis" name="role">
                                  <option value="admin">Admin</option>
                                  <option value="cek">Pengecekan</option>
                                  <option value="arsip">Arsip</option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn bg-primary">Simpan</button>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $usr)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$usr->name}}</td>
                            <td>{{$usr->email}}</td>
                            <td>{{$usr->telpon}}</td>
                            <td>
                              <a href="/pakun/{{$usr->id}}/hapus" class="badge badge-danger">Hapus</a>
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