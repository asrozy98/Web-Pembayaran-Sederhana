@extends('Templates/template')

@section('content')
<div id="cekdata">
  <div id="tabelmahasiswa">
    <table class="table table-striped table-dark">
      <tbody>
        <tr>
          <th scope="row">Nama</th>
          <td>{{$user->name}}</td>
        </tr>
        <tr>
          <th scope="row">NIM</th>
          <td>{{$user->nim}}</td>
        </tr>
        <tr>
          <th scope="row">Kelas</th>
          <td>{{$user->kelas}}</td>
        </tr>
      </tbody>
    </table>
  </div>
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <div id="tabeldata">
    <table class="table" border='1' >
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Jenis Pembayaran</th>
          <th scope="col">Total Pembayaran</th>
          <th scope="col">Sudah Dibayar</th>
          <th scope="col">Kekurangan</th>
          <th scope="col">Penyetor</th>
          <!-- <th scope="col">Buktipembayaran</th> -->
          <th scope="col">Aksi</th>        
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
        
        
        
        <td>
            <a href="/admin/infopembayaran/{{$databayar->id}}/edit"class="btn btn-primary">Edit</a>    
            <form action="/admin/infopembayaran/{{$databayar->id}}"method="post" class="d-inline">
            @method('delete')            
            @csrf
              <button type="submit"class="btn btn-danger">Hapus</button>
            </form>
          </td>  
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection