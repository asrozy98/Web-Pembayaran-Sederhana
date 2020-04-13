
@extends('Templates/template')
@section('content')
<div id="pembayaran">
  <form  method="POST" action="{{ url('/mahasiswa/pembayaran') }}" enctype="multipart/form-data">
  @csrf
    <div class="form-row align-items-center">
      <div class="col-auto my-1">
        <label for="jenispembayaran">Jenis Pembayaran</label>
        <select class="custom-select mr-sm-2" id="jenispembayaran" name="jenispembayaran">
          <option selected>Pilihan Jenis Pembayaran</option>
          <option value="1">Pendaftaran</option>
          <option value="2">Regristrasi Awal</option>
          <option value="3">Her-Regristrasi Semester</option>
          <option value="4">SPP Semester</option>
          <option value="5">DPP</option>
          <option value="6">UAS</option>
          <option value="7">Biaya SKS</option>
        </select>
      </div>    
    </div>
    

    <div class="form-group">
      <label for="bayar">Jumlah Pembayaran</label>
      <input id="bayar" type="text" class="form-control" name="bayar">
    </div>

    <!-- <div class="form-group">
      <label for="filebukti">Bukti Pembayaran</label>
      <input type="file" name="filebukti"> 
		</div> -->

    <button type="submit" class="btn btn-primary">Bayar</button>
  </form>
</div>
@endsection