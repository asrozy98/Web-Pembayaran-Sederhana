<?php

use Illuminate\Database\Seeder;
use App\Gambar;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gbr = new Gambar;
        $gbr->id = '1';
        $gbr->user_id = '1';
        $gbr->file = 'admin.jpg';
        $gbr->keterangan = 'admin';
        $gbr->created_at = new DateTime();
        $gbr->updated_at = new DateTime();
        $gbr->save();
    }
}
