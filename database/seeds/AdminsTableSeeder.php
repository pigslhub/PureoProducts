<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');
        $admins = array(
          array(
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => $password,
            'type' => 0,
            'status' => 1,
            'api_token' => '',
            'avatar' => '',
          ),
        );
        foreach ($admins as $admin)
        {
            \App\Models\Admin::create($admin);
        }
    }
}
