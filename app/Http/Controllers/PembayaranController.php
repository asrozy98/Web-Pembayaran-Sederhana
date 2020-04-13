<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use \App\User;
use \App\infopembayaran;
use \App\jenispembayaran;
use \App\Gambar;



class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapembayaran=User::where('is_admin','0')->paginate(5);
        return view('/admin/cekpembayaran',compact('datapembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/mahasiswa/pembayaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->file('filebukti');
        //// $nama_file = time()."_bukti_".$file->getClientOriginalName();
		
      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'data_filebukti';
		// $file->move($tujuan_upload,$nama_file);
       
        $user=\App\user::find(\Auth::user()->id);
        $user->infopembayaran()->create([
            'user_id'=>\Auth::user()->id,
            'jenispembayaran_id'=>$request->jenispembayaran,
            'membayar'=>$request->bayar,
            'penyetor'=>\Auth::user()->name,
            // 'gambar_id'=>$request->jenispembayaran,
        ]);
        //$user->infopembayaran()->save($infopembayaran);

        // $user->gambar()->create([
        //     'user_id'=>\Auth::user()->id,
        //     'file' => $nama_file, 
        //     'keterangan' => $request->jenispembayaran//."+bukti+".\Auth::user()->name
        // ]);
          
        //   $user->gambar->file = $nama_file;
		//   $user->gambar->keterangan = $request->keterangan;
    
        // $user->save();
        return redirect('/mahasiswa/cekdata')->with('status', 'Pembayaran Mahasiswa Sudah Berhasil!');

        // $user=\App\user::find(\Auth::user()->id);
        // $infopembayaran= new Infopembayaran([
        // 'jenispembayaran'=>$request->jenispembayaran,
        // 'totalpembayaran'=>$request->jenispembayaran,
        // 'kekuranganpembayaran'=>$request->jenispembayaran,
        // 'sudahpembayaran'=>$request->pembayaran,
        // 'status'=>$request->pembayaran,
        // 'user_id'=>\Auth::user()->id
        // ]);

        // $user->infopembayaran()->save($infopembayaran);
        // return redirect('/mahasiswa/cekdata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(infopembayaran $infopembayaran)
    {
        $datapembayaran=infopembayaran::where('user_id',$infopembayaran->id)->get();
        $userr=user::where('id',$infopembayaran->id)->get();
        foreach($userr as $user)
        // foreach($datapembayaran as $data){
        // $gambar=gambar::where('keterangan',$data->jenispembayaran_id)->get();
        return view('/admin/detailpembayaran', compact('user','datapembayaran'));
        //}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user,infopembayaran $infopembayaran)
    {
        $datapembayaran=infopembayaran::where('id',$infopembayaran->id)->get();
        // $gambar = \App\Gambar::get();
        foreach($datapembayaran as $data){
        // <td><img width="150px" src="{{ url('/data_filebukti/'.$gg->file) }}"></td>
        return view('/admin/editpembayaran',compact('user','data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infopembayaran $infopembayaran)
    {
        // infopembayaran::find($infopembayaran->id)->jenispembayaran
        //   ->update([
        //     //   'jenispembayaran_id'=>$request->jenispembayaran,
        //       'totalpembayaran'=>$request->totalpembayaran,
        //       ]);
        infopembayaran::where('id',$infopembayaran->id)
          ->update([
              'jenispembayaran_id'=>$request->jenispembayaran,
            //   'totalpembayaran'=>$request->totalpembayaran,
              'membayar'=>$request->sudahpembayaran,
            //   'kekuranganpembayaran'=>$request->kekuranganpembayaran,
              'penyetor'=>$request->penyetor
              ]);
              return redirect('/admin/infopembayaran')->with('status', 'Data Pembayaran Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(infopembayaran $infopembayaran)
    {
        
         infopembayaran::destroy($infopembayaran->id);
         return redirect('/admin/infopembayaran/')->with('status', 'Data Pembayaran Mahasiswa Berhasil Dihapus!');
     }
}
