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
          <th scope="col">Jenis Pembayaran</th>
          <!-- <th scope="col">Total Pembayaran</th> -->
          <th scope="col">Sudah Dibayar</th>
          <!-- <th scope="col">Kekurangan</th> -->
          <th scope="col">Penyetor</th>
          <th scope="col">Aksi</th>          
        </tr>
      </thead>
      <tbody>  
        <tr>
        <form method="POST" action="/admin/infopembayaran/{{$data->id}}" enctype="multipart/form-data">
        @method('patch')
        @csrf  
          <td><div class="col-auto my-1">
        <select class="custom-select mr-sm-2" id="jenispembayaran" name="jenispembayaran">
          <option value="{{ $data->jenispembayaran_id}}"selected>{{ $data->jenispembayaran->jenispembayaran}}</option>
          <option value="1">Pendaftaran</option>
          <option value="2">Regristrasi Awal</option>
          <option value="3">Her-Regristrasi Semester</option>
          <option value="4">SPP Semester</option>
          <option value="5">DPP</option>
          <option value="6">UAS</option>
          <option value="7">Biaya SKS</option>
        </select>
      </div>
          </td>

          

          <td><input id="sudahpembayaran" type="text" class="form-control @error('sudahpembayaran') is-invalid @enderror" name="sudahpembayaran" value="{{ $data->membayar}}" required autocomplete="sudahpembayaran" autofocus>
          @error('sudahpembayaran')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </td>

          

          <td><input id="status" type="text" class="form-control @error('penyetor') is-invalid @enderror" name="penyetor" value="{{ $data->penyetor}}" required autocomplete="penyetor" autofocus>
          @error('penyetor')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </td>
          
          <td>           
            <button type="submit"class="btn btn-primary">Simpan</button>
            </form>
          </td>  
        </tr>    
      </tbody>  
    </table>
  </div>
</div>
@endsection