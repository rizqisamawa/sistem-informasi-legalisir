@extends('Main/tampilan')
@section('title', 'Halaman Perubahan Kartu Keluarga')
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

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Perubahan Data Kartu Keluarga</h3>
              </div>
              <div class="card-body">
              <form method="post" action="/kk/{{$kk->id}}/gkk">
              @csrf
                <div class="form-group">
                    <label for="no_kk">Nomor Kartu Keluarga</label>
                    <input type="text" class="form-control" id="no_kk" placeholder="Masukan no_kk" name="no_kk" value="{{$kk->no_kk}}">
                </div>
                <div class="form-group">
                  <label for="nama_kk">Nama Kepala Keluarga</label>
                  <input type="text" class="form-control" id="nama_kk" placeholder="Masukan nama_kk" name="nama_kk" value="{{$kk->nama_kk}}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{$kk->alamat}}">
                </div>
                <div class="form-group">
                  <label for="rtrw">RT / RW</label>
                  <input type="text" class="form-control" id="rtrw" placeholder="Masukan rtrw" name="rtrw" value="{{$kk->rtrw}}">
                </div>
                <div class="form-group">
                  <label for="kodepos">Kodepos</label>
                  <input type="text" class="form-control" id="kodepos" placeholder="Masukan kodepos" name="kodepos" value="{{$kk->kodepos}}">
                </div>
                <div class="form-group">
                  <label for="desa">Desa</label>
                  <input type="text" class="form-control" id="desa" placeholder="Masukan desa" name="desa" value="{{$kk->desa}}">
                </div>
                <div class="form-group">
                  <label for="kecamatan">Kecamatan</label>
                  <input type="text" class="form-control" id="kecamatan" placeholder="Masukan kecamatan" name="kecamatan" value="{{$kk->kecamatan}}">
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Masukan kota" name="kota" value="{{$kk->kota}}">
                </div>
                <div class="form-group">
                  <label for="provinsi">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" placeholder="Masukan provinsi" name="provinsi" value="{{$kk->provinsi}}">
                </div>
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
@endsection