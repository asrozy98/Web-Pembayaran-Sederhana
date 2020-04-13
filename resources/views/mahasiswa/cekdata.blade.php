@extends('Templates/template')
@section('content')
<div id="cekdata">
  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
        </div>
        <div id="tabelmahasiswa">
        <table class="table table-striped table-dark">
          <tbody>
            <tr>
              <th scope="row">Nama</th>
                <td>{{ Auth::user()->name}}</td>
            </tr>
            <tr>
              <th scope="row">NIM</th>
                <td>{{ Auth::user()->nim}}</td>
            </tr>
            <tr>
              <th scope="row">Kelas</th>
                <td>{{ Auth::user()->kelas}}</td>
            </tr>   
          </tbody>
        </table>
      </div>
      
      <div id="tabeldata">
        <table class="table" border='1' >
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Jenis Pembayaran</th>
              <th scope="col">Total Pembayaran</th>
              <th scope="col">Sudah Dibayar</th>
              <th scope="col">Kekurangan</th>
              <th scope="col">Penyetor</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($datapembayaran as $databayar)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $databayar->jenispembayaran->jenispembayaran}}</td>
                <td>{{ $databayar->jenispembayaran->totalpembayaran}}</td>
                <td>{{ $databayar->membayar}}</td>
                <td>{{$kekurangan=$databayar->jenispembayaran->totalpembayaran - $databayar->membayar}}</td>
                <td>{{ $databayar->penyetor}}</td>
                
              </tr>
            @endforeach  
          </tbody>
        </table>
        {{ $datapembayaran->links() }}
      </div>
  </div>
</div>
@endsection