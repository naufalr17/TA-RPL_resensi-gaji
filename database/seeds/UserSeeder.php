<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();


        User::updateOrCreate([
            'id' => 1,
            'nip' => 'admin',
            'password' => bcrypt('admin'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 2,
            'nip' => 'G.231.20.0160',
            'password' => bcrypt('rahasia'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 3,
            'nip' => 'G.231.20.0166',
            'password' => bcrypt('rahasia'),
            'is_active' => 1
        ]);

        User::updateOrCreate([
            'id' => 4,
            'nip' => 'G.231.20.0151',
            'password' => bcrypt('rahasia'),
            'is_active' => 1
        ]);
        User::updateOrCreate([
            'id' => 5,
            'nip' => 'G.231.20.0133',
            'password' => bcrypt('rahasia'),
            'is_active' => 1
        ]);
        User::updateOrCreate([
            'id' => 6,
            'nip' => 'G.231.20.0143',
            'password' => bcrypt('rahasia'),
            'is_active' => 1
        ]);
    }
}
