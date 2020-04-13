@extends('Templates/template')

@section('content')
<div id="cekdata">
  <div class="row justify-content-center">    
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
  </div>
  <div class="row justify-content-center">
    @foreach($datapembayaran as $mahasiswa)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $mahasiswa->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $mahasiswa->nim}}</h6>
          <p class="card-text">{{$mahasiswa->kelas}} ==> <a href="/admin/infopembayaran/{{$mahasiswa->id}}"class="btn btn-primary">Detail</a></p>
        </div>
      </div>
    @endforeach 
    </div>
    {{ $datapembayaran->links() }}
</div>
@endsection