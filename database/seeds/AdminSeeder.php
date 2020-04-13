<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = new User;
        $usr->name = 'Administrator';
        $usr->nim = '000000000';
        $usr->kelas = 'VIP';
        $usr->email = 'admin@admin.com';
        $usr->is_admin = '1';
        $usr->password = '$2y$10$HrbuX1Vla.MxAJDjzFVV5O2MTMngM2e5AKPZt0Ukb3JZRalOBeUUm';
        $usr->created_at = new DateTime();
        $usr->updated_at = new DateTime();
        $usr->save();
    }
}
