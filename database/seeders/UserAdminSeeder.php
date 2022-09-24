<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

            'fName'=>Str::singular('Admin'),
            'lName'=>Str::singular('Admin'),
            'email'=>Str::singular('admin@gmail.com'),
            'password'=>Str::singular(Hash::make('password')),
            'studentType'=>Str::singular(''),
            'isAdmin'=>Str::singular('1'),
            'phoneNumber'=>random_int(1,12),
            'yearLevel' =>Str::singular(''),
            'course'=>Str::singular(''),
            'schoolId'=>Str::singular('')

        ]);
        DB::table('users')->insert([

            'fName'=>Str::singular('Admin2'),
            'lName'=>Str::singular('Admin2'),
            'email'=>Str::singular('admin2@gmail.com'),
            'password'=>Str::singular(Hash::make('password')),
            'studentType'=>Str::singular(''),
            'isAdmin'=>Str::singular('1'),
            'phoneNumber'=>random_int(1,12),
            'yearLevel' =>Str::singular(''),
            'course'=>Str::singular(''),
            'schoolId'=>Str::singular('')

        ]);
    }
}
