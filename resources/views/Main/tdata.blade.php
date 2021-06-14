@extends('Main/tampilan')
@section('title', 'Halaman Tambah Data Arsip')
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
              
            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pengarsipan</h3>
              </div>
                <form role="form" method="post" action="/tdata/tambah">
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
                  <div class="card-footer">
                    <button type="submit" class="btn bg-purple">Submit</button>
                  </div>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>


  @endsection