<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\User ;
use Illuminate\Http\Request;
use \App\user;
use \App\infopembayaran;
use \App\jenispembayaran;

class DataController extends Controller
{
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //$gambarr = \App\Gambar::where('user_id',\Auth::user()->id)->get();
      $datapembayaran = \App\infopembayaran::where('user_id',\Auth::user()->id)->paginate(5);
      //$datapembayaran = \App\infopembayaran::where( 'user_id','Like','%3%'OR'jenispembayaran','Like','%UAS%')->get();
      //$datapembayarann =$datapembayaran::where('user_id',\Auth::user()->id)->get();
      //$datapembayarann = $datapembayaran->sum('totalpembayaran');
      //$totalpembayaran = \Auth::user()->infopembayaran->sum('totalpembayaran');
      
  //$kekurangan=$datapembayaran->jenispembayaran->totalpembayaran - $datapembayaran->membayar;
   
      return view ('/mahasiswa/cekdata',compact('datapembayaran'));
  }
  // public function upload(){
	// 	$gambarr = \App\Gambar::where('user_id',\Auth::user()->id)->get();
	// 	return view('Templates/sidebar',['gambarr' => $gambarr]);
	// }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
     
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // $data= new infopembayaran;
    // $data->infopembayaran->jenispembayaran=$request->jenispembayaran;
    // $data->infopembayaran->sudahpembayaran=$request->pembayaran;
    // $data->infopembayaran->user_id=\Auth::user()->id;
    //infopembayaran->jenispembayaran=$request->jenispembayaran;
    //infopembayaran()->sudahpembayaran=$request->pembayaran;
      // $user=\App\user::find(\Auth::user()->id);
      // $infopembayaran= new Infopembayaran([
      //   'jenispembayaran'=>$request->jenispembayaran,
      //   'totalpembayaran'=>$request->jenispembayaran,
      //   'kekuranganpembayaran'=>$request->jenispembayaran,
      //   'sudahpembayaran'=>$request->pembayaran,
      //   'status'=>$request->pembayaran,
      //   'user_id'=>\Auth::user()->id
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
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy()
  {
      //
  }
}
