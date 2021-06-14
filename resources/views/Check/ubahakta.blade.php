@extends('Main/tampilan')
@section('title', 'Halaman Perubahan Akta Kelahiran')
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
                <h3 class="card-title">Perubahan Data Akta Kelahiran</h3>
              </div>
              <div class="card-body">
              <form method="post" action="/akta/{{$akta->id}}/gakta">
              @csrf
                <div class="form-group">
                    <label for="no_akta">Nomor Akta Kelahiran</label>
                    <input type="text" class="form-control" id="no_akta" name="no_akta" value="{{$akta->no_akta}}">
                </div>
                <div class="form-group">
                  <label for="anak_ke">Anak Ke</label>
                  <input type="text" class="form-control" id="anak_ke"  name="anak_ke" value="{{$akta->anak_ke}}">
                </div>
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn bg-teal">Submit</button>
                </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
@endsection