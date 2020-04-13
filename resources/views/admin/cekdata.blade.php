@extends('Templates/template')

@section('content')
<div id="cekdata">
  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
  <div class="row justify-content-center">
    
    <div id="tabelmahasiswa">
      <table class="table" border='1' >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Kelas</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>         
          </tr>
        </thead>
        <tbody>
          @foreach($datamahasiswa as $mahasiswa)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{ $mahasiswa->name}}</td>
              <td>{{ $mahasiswa->nim}}</td>
              <td>{{ $mahasiswa->kelas}}</td>
              <td>{{ $mahasiswa->email}}</td>
              <td>
                <a href="/admin/user/{{$mahasiswa->id}}/edit"class="btn btn-primary">Edit</a>    
                <form action="/admin/user/{{$mahasiswa->id}}"method="post" class="d-inline">
                @method('delete')
                @csrf
                  <button type="submit"class="btn btn-danger">Hapus</button>
                </form>
              </td>      
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $datamahasiswa->links() }}
    </div>
  </div>
</div>
@endsection