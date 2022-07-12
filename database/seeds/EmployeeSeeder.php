<?php

use App\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $z = Carbon\Carbon::now()->subMonth()->endOfMonth();

        Employee::updateOrCreate([
            'id' => 2,
            'full_name' => 'Muhammad Naufal Rizki',
            'address' => 'Srondol Wetan, Indonesia',
            'phone' => '08888888888',
            'marital_status' => 0,
            'number_of_children' => 0,
            'profile_pic' => 'default.png',
            'user_id' => 2,
            'position_id' => 3,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 3,
            'full_name' => 'Bagas Fedlian Wicaksana',
            'address' => 'Jakarta, Indonesia',
            'phone' => '082122233312',
            'marital_status' => 1,
            'number_of_children' => 3,
            'profile_pic' => 'default.png',
            'user_id' => 3,
            'position_id' => 2,
            'created_at' => $z
        ]);

        Employee::updateOrCreate([
            'id' => 4,
            'full_name' => 'Chrismanuel Cahya Maramis',
            'address' => 'Surabaya, Jawa Timur, Indonesia',
            'phone' => '08213764612',
            'marital_status' => 1,
            'number_of_children' => 3,
            'profile_pic' => 'default.png',
            'user_id' => 3,
            'position_id' => 2,
            'created_at' => $z
        ]);
        Employee::updateOrCreate([
            'id' => 5,
            'full_name' => 'Dimas Satriyo Nugroho',
            'address' => 'Nanggroe Aceh Darussalam',
            'phone' => '62822233312',
            'marital_status' => 1,
            'number_of_children' => 3,
            'profile_pic' => 'default.png',
            'user_id' => 3,
            'position_id' => 2,
            'created_at' => $z
        ]);
        Employee::updateOrCreate([
            'id' => 6,
            'full_name' => 'Nandar Sutrisno',
            'address' => 'Samarinda, Indonesia',
            'phone' => '082122839312',
            'marital_status' => 1,
            'number_of_children' => 3,
            'profile_pic' => 'default.png',
            'user_id' => 3,
            'position_id' => 2,
            'created_at' => $z
        ]);
    }
}
