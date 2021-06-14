@extends('Main/tampilan')
@section('title', 'Halaman Perubahan Data Arsip')
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

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Perubahan Data Pengarsipan</h3>
              </div>
              <div class="card-body">
              <form method="post" action="/data/{{$arsip->id}}/ganti">
              @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{$arsip->nama}}">
                </div>
                <div class="form-group">
                  <label for="jenis">Jenis Legalisir</label>
                  <select class="form-control" id="jenis" name="jenis">
                    <option value="KTP" @if($arsip->jenis == 'KTP') selected @endif>KTP</option>
                    <option value="KK" @if($arsip->jenis == 'KK') selected @endif>KK</option>
                    <option value="AKTA" @if($arsip->jenis == 'AKTA') selected @endif>AKTA</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="ns">Nomor Special</label>
                  <input type="text" class="form-control" id="ns" placeholder="Masukan Nomor Special" name="ns" value="{{$arsip->ns}}">
                </div>
                <div class="form-group">
                  <label for="keperluan">Keperluan Legalisir</label>
                  <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan Legalisir" name="keperluan" value="{{$arsip->keperluan}}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{$arsip->alamat}}">
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$arsip->tanggal}}">
                </div>
                <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" placeholder="Masukan No HP" name="nohp" value="{{$arsip->nohp}}">
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
@endsection