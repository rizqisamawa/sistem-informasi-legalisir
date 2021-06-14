@extends('Main/tampilan')
@section('title', 'Detail Anggota KK')
@section('container')
  
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Anggota Kartu Keluarga</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="card">


              <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap text-center">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Kelamin</th>
                      <th>TTL</th>
                      <th>Agama</th>
                      <th>Pendidikan</th>
                      <th>darah</th>
                      <th>Status Kawin</th>
                      <th>Tanggal Kawin</th>
                      <th>Status Keluarga</th>
                      <th>Ayah</th>
                      <th>Ibu</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($kk->anggota as $agt)
                  <tr>
                    <td>{{$agt->nama}}</td>
                    <td>{{$agt->NIK}}</td>
                    <td>{{$agt->kelamin}}</td>
                    <td>{{$agt->ttl}}</td>
                    <td>{{$agt->agama}}</td>
                    <td>{{$agt->pendidikan}}</td>
                    <td>{{$agt->goldarah}}</td>
                    <td>{{$agt->stskawin}}</td>
                    <td>{{$agt->tglkawin}}</td>
                    <td>{{$agt->stskeluarga}}</td>
                    <td>{{$agt->ayah}}</td>
                    <td>{{$agt->ibu}}</td>
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
