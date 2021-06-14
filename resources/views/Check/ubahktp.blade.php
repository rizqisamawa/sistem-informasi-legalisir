@extends('Main/tampilan')
@section('title', 'Halaman Perubahan Kartu Tanda Penduduk')
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

            <div class="card card-olive">
              <div class="card-header">
                <h3 class="card-title">Perubahan Data Kartu Tanda Penduduk</h3>
              </div>
              <div class="card-body">
              <form method="post" action="/ktp/{{$ktp->id}}/gktp">
              @csrf
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{$ktp->alamat}}">
                </div>
                <div class="form-group">
                    <label for="berlaku">Berlaku</label>
                    <input type="text" class="form-control" id="berlaku" placeholder="Masukan berlaku" name="berlaku" value="{{$ktp->berlaku}}">
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