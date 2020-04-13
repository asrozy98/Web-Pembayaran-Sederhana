<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infopembayaran extends Model
{
    public function gambar(){
		return $this->belongsTo(Gambar::class); 
	}
    protected $fillable = [
        'user_id','jenispembayaran_id','membayar','penyetor','gambar_id',
    ];
    public function user(){ 
        return $this->belongsTo(User::class); 
    }
    public function jenispembayaran(){
        return $this->belongsTo(\App\jenispembayaran::class); 
    }
    
}
