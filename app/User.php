<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $fillable = [
        'name','nim','kelas', 'email', 'password',
    ];

    public function infopembayaran()
    {
    	return $this->hasOne(\App\infopembayaran::class);
    }
    public function gambar(){
		return $this->hasOne(\App\Gambar::class); 
    }
    public function jenispembayaran(){
        return $this->hasOne(\App\jenispembayaran::class); 
    }
    
}
