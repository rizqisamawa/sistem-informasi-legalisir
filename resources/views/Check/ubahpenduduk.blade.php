@extends('Main/tampilan')
@section('title', 'Halaman Perubahan Data Penduduk')
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

            <div class="card card-teal">
              <div class="card-header">
                <h3 class="card-title">Perubahan Data Penduduk</h3>
              </div>
              <div class="card-body">
              <form method="post" action="/penduduk/{{$anggota->id_ak}}/gpenduduk">
              @csrf
                    <div class="form-group">
                        <label for="id_ak">Nomor Sistem Penduduk</label>
                        <input type="text" class="form-control" id="id_ak" name="id_ak" value="{{$anggota->id_ak}}">
                    </div>
                    <div class="form-group">
                        <label for="kk_id">Nomor Sistem KK</label>
                        <input type="text" class="form-control" id="kk_id" name="kk_id" value="{{$anggota->kk_id}}">
                    </div>
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="text" class="form-control" id="NIK" name="NIK" value="{{$anggota->NIK}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$anggota->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Kelamin</label>
                        <input type="text" class="form-control" id="kelamin" name="kelamin" value="{{$anggota->kelamin}}">
                    </div>
                    <div class="form-group">
                        <label for="ttl">TTL</label>
                        <input type="text" class="form-control" id="ttl" name="ttl" value="{{$anggota->ttl}}">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="{{$anggota->agama}}">
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{$anggota->pendidikan}}">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{$anggota->pekerjaan}}">
                    </div>
                    <div class="form-group">
                        <label for="goldarah">Golongan Darah</label>
                        <input type="text" class="form-control" id="goldarah" name="goldarah" value="{{$anggota->goldarah}}">
                    </div>
                    <div class="form-group">
                        <label for="stskawin">Status Kawin</label>
                        <input type="text" class="form-control" id="stskawin" name="stskawin" value="{{$anggota->stskawin}}">
                    </div>
                    <div class="form-group">
                        <label for="tglkawin">Tanggal Kawin</label>
                        <input type="text" class="form-control" id="tglkawin" name="tglkawin" value="{{$anggota->tglkawin}}">
                    </div>
                    <div class="form-group">
                        <label for="stskeluarga">Status Keluarga</label>
                        <input type="text" class="form-control" id="stskeluarga" name="stskeluarga" value="{{$anggota->stskeluarga}}">
                    </div>
                    <div class="form-group">
                        <label for="warga">Warga Negara</label>
                        <input type="text" class="form-control" id="warga" name="warga" value="{{$anggota->warga}}">
                    </div>
                    <div class="form-group">
                        <label for="ayah">Ayah</label>
                        <input type="text" class="form-control" id="ayah" name="ayah" value="{{$anggota->ayah}}">
                    </div>
                    <div class="form-group">
                        <label for="ibu">Ibu</label>
                        <input type="text" class="form-control" id="ibu" name="ibu" value="{{$anggota->ibu}}">
                    </div>
            </div>
                    <div class="card-footer">
                    <button type="submit" class="btn bg-olive">Submit</button>
                    </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
@endsection