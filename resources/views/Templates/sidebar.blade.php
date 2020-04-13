<aside id="sideBar">
  <div id="info">
    <img src="{{ url('/data_file/'.Auth::user()->gambar->file) }}" width="150" height="150">
  </div>
  <div id="userinfo">
    @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
      @endif
      @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
    @endguest
  </div>
  
  <ul class="nav flex-column nav-pills">
    @if(Auth::user()->is_admin)
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/admin/cekdata')}}">Data Akun Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/admin/infopembayaran')}}">Data Pembayaran</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/admin/tambahakun')}}">Tambah Akun Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/about')}}">About</a>
    </li>
   
    @else

    <li class="nav-item" >
      <a class="nav-link active" href="{{url('/mahasiswa/cekdata')}}">Cek Data Pembayaran</a>
    </li>   
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/mahasiswa/pembayaran')}}">Pembayaran</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link active" href="{{url('/mahasiswa/bantuan')}}">Bantuan</a>
    </li>   -->
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/about')}}">About</a>
    </li>
    @endif
  </ul>
</aside>