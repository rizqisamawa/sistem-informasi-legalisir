@extends('Main/tampilan')
@section('title', 'Halaman Tambah Konfirmasi')
@section('container')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
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

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat Laporan Pengecekan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="post" action="/ckonfirmasi/tkonfirmasi">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengecek</label>
                    <input name="namac" value="{{auth()->user()->name}}" type="text" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pengunjung</label>
                    <input name="namap" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Pengunjung">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea name="keterangan" type= "text "class="form-control" class="form-control" id="exampleInputPassword1" rows="3" placeholder="Masukan NAMA & NOMOR berkas"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>

                </div>
            </div>
        </div>
    </div>

@endsection