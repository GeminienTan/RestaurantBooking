<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Jane Tan',
                'email'=>'janetan@gmail.com',
                'password'=> Hash::make(Str::random(8)),
                'contact_number'=>'0123456789',
                'role'=>'user',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'James Ooi',
                'email'=>'jamesooi@gmail.com',
                'password'=> Hash::make(Str::random(8)),
                'contact_number'=>'0123456788',
                'role'=>'admin',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ]
        ]);
    }
}
