<?php

namespace App\Http\Controllers;
use \App\User;
use \App\infopembayaran;
use File;
use \App\Gambar;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $datamahasiswa = \App\user::where('is_admin','0')->count();
        $datapembayaran = \App\infopembayaran::count();
        
        return view('/admin/admin',compact('datamahasiswa','datapembayaran'));
    }
    
    public function index()
    {
        $datamahasiswa = \App\user::where('is_admin','0')->paginate(5);
        
        
        return view('/admin/cekdata',compact('datamahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/tambahakun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $this->validate($request, [
			'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:255', 'unique:users'],
            'kelas' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			
		]);

		//menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		


        
        // $user= new User;
        //   $user->name=$request->name;
        //   $user->nim=$request->nim;
        //   $user->kelas=$request->kelas;
        //   $user->email=$request->email;
        //   $user->password= Hash::make($request->password);
        $user= user::create([
            'name'=>$request->name,
            'nim'=>$request->nim,
            'kelas'=>$request->kelas,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)

        ]);
        $user->gambar()->create([
             'file' => $nama_file, 
             'keterangan' => $request->name
        ]);
          
        //   $user->gambar->file = $nama_file;
		//   $user->gambar->keterangan = $request->keterangan;
    
        // $user->save();
        return redirect('/admin/cekdata')->with('status', 'Akun Mahasiswa Berhasil Ditambahkan!');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $datamahasiswa = \App\user::where('id',$user->id)->get();
        // foreach($datamahasiswa as $mahasiswa);
        
        return view('/admin/ubahdata',compact('datamahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
			'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            
		]);
        // $user= user::update([
        //     'name'=>$request->name,
        //     'nim'=>$request->nim,
        //     'kelas'=>$request->kelas,
        //     'email'=>$request->email

        // ]);
        User::where('id',$user->id)
          ->update([
              'name'=>$request->name,
              'nim'=>$request->nim,
              'kelas'=>$request->kelas,
              'email'=>$request->email
              ]);
              return redirect('/admin/cekdata')->with('status', 'Akun Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $gambar = \App\Gambar::where('id',$user->id)->first();
        File::delete('data_file/'.$user->gambar->file);

        User::destroy($user->id);
        return redirect('/admin/cekdata')->with('status', 'Akun Mahasiswa Berhasil Dihapus!');
    }
}
