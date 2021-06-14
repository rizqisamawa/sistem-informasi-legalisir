@extends('Main/tampilan')
@section('title', 'Halaman Detail & Konfirmasi')
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

                      @php
                      if ($konfirmasi->status == 'SELESAI'):
                      $rd = 'disabled=""';
                      elseif ($konfirmasi->status == 'PROSES'):
                      $rd = '';
                      endif;
                      @endphp

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Konfirmasi</h3>
              </div>
              <div class="card-body">
              <form method="post" action="/konfirmasi/{{$konfirmasi->id}}/fkonfirmasi">
              @csrf
                <div class="form-group">
                  <label for="nama">Nama Pengecek</label>
                  <input type="text" class="form-control" id="nama" placeholder="" name="namac" value="{{$konfirmasi->namac}}" readonly>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Pengunjung</label>
                  <input type="text" class="form-control" id="nama" placeholder="" name="namap" value="{{$konfirmasi->namap}}" readonly>
                </div>
                <div class="form-group">
                  <label for="ns">Keterangan</label>
                  <input type="text" class="form-control" id="ns" placeholder="" name="keterangan" value="{{$konfirmasi->keterangan}}" readonly>
                </div>
                <div class="form-group">
                  <label for="ns">Komentar</label>
                  <input type="text" class="form-control" id="ns" placeholder="" name="komentar" value="{{$konfirmasi->komentar}}">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="status" name="status" {{$rd}}>
                    <option value="PROSES" @if($konfirmasi->status == 'PROSES') selected @endif>PROSES</option>
                    <option value="SELESAI" @if($konfirmasi->status == 'SELESAI') selected @endif>SELESAI</option>
                  </select>
                </div>
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
@endsection