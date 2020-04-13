@extends('Templates/template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ubah Data Akun Mahasiswa') }}</div>
                    @foreach($datamahasiswa as $mahasiswa)
                        <div class="card-body">
                            <form method="POST" action="/admin/{{$mahasiswa->id}}" enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$mahasiswa->name}}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('NIM') }}</label>
                                    <div class="col-md-6">
                                        <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{$mahasiswa->nim}}" required autocomplete="nim" autofocus>
                                        @error('nim')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kelas" class="col-md-4 col-form-label text-md-right">{{ __('Kelas') }}</label>
                                    <div class="col-md-6">
                                        <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{$mahasiswa->kelas}}" required autocomplete="kelas" autofocus>
                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$mahasiswa->email}}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" name="file" >
                                    </div>
                                </div> -->                               

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ubah Data') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
