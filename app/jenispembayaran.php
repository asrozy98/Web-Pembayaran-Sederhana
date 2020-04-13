<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenispembayaran extends Model
{
    protected $table = "jenispembayaran";
    protected $fillable = [
        'totalpembayaran',
    ];
    public function infopembayaran(){ 
        return $this->hasOne(infopembayaran::class); 
        }

}
