<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'nama_user' => 'Admin',
                'email_user' => 'admin@gmail.com',
                'pekerjaan_user' => 'Admin',
                'telp_user' => '+62',
                'password_user' => Hash::make('admin'),
                'role_id' => '1',
            ],
            [
                'nama_user' => 'Pakar',
                'email_user' => 'pakar@gmail.com',
                'pekerjaan_user' => 'Pakar',
                'telp_user' => '+62',
                'password_user' => Hash::make('pakar'),
                'role_id' => '2',
            ],
            [
                'nama_user' => 'Pengguna',
                'email_user' => 'pengguna@gmail.com',
                'pekerjaan_user' => 'Petani',
                'telp_user' => '+62',
                'password_user' => Hash::make('pengguna'),
                'role_id' => '3',
            ],
        ];

        foreach($userData as $val){
            DB::table('users')->insert([
                'nama_user' => $val['nama_user'],
                'email_user' => $val['email_user'],
                'pekerjaan_user' => $val['pekerjaan_user'],
                'telp_user' => $val['telp_user'],
                'password_user' => $val['password_user'],
                'role_id' => $val['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
