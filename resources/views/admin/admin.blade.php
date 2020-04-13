@extends('Templates/template')

@section('content')
<div id="cekdata">
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
<div class="row justify-content-center">
  <div class="card" style="width: 200px;">
    <div class="card-header">
    <h3>Data Mahasiswa:</h3>
    </div>
    <center>
      <h1>{{$datamahasiswa}}</h1>
    </center>
  </div>
  <div class="kosong"style="width: 200px;">
  </div>
  <div class="card" style="width: 200px;">
    <div class="card-header">
    <h3>Data Pembayaran:</h3>
    </div>
    <center>
      <h1>{{$datapembayaran}}</h1>
    </center>
  </div>
</div>
</div>
@endsection
