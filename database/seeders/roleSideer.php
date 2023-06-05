<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\role;


class roleSideer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create ([
            'role' => 'Admin'
        ]);
        role::create ([
            'role' => 'Pakar'
        ]);
        role::create ([
            'role' => 'Pengguna'
        ]);
        // foreach ($data as $value){
        //     DB::table('roles')->insert([
        //         'role' => $value['role'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }
    }
}
