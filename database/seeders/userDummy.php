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
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'pekerjaan' => 'Admin',
            'telp' => '+62',
            'password' => Hash::make('admin'),
            'role_id' => '1',
        ]);
        User::create([
            'nama' => 'Pakar',
            'email' => 'pakar@gmail.com',
            'pekerjaan' => 'Pakar',
            'telp' => '+62',
            'password' => Hash::make('pakar'),
            'role_id' => '2',
        ]);
        User::create([
            'nama' => 'Pengguna',
            'email' => 'pengguna@gmail.com',
            'pekerjaan' => 'Petani',
            'telp' => '+62',
            'password' => Hash::make('pengguna'),
            'role_id' => '3',
        ]);

        // User::create = [
        //     [
        //         'nama' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'pekerjaan' => 'Admin',
        //         'telp' => '+62',
        //         'password' => Hash::make('admin'),
        //         'role_id' => '1',
        //     ],
        //     [
        //         'nama' => 'Pakar',
        //         'email' => 'pakar@gmail.com',
        //         'pekerjaan' => 'Pakar',
        //         'telp' => '+62',
        //         'password' => Hash::make('pakar'),
        //         'role_id' => '2',
        //     ],
        //     [
        //         'nama' => 'Pengguna',
        //         'email' => 'pengguna@gmail.com',
        //         'pekerjaan' => 'Petani',
        //         'telp' => '+62',
        //         'password' => Hash::make('pengguna'),
        //         'role_id' => '3',
        //     ],
        // ];

        // foreach($userData as $val){
        //     DB::table('users')->insert([
        //         'nama' => $val['nama'],
        //         'email' => $val['email'],
        //         'pekerjaan' => $val['pekerjaan'],
        //         'telp' => $val['telp'],
        //         'password' => $val['password'],
        //         'role_id' => $val['role_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }
    }
}
