<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    public function run()
    {
        $password = \Illuminate\Support\Facades\Hash::make('password');
        $drivers = array(
            array(
                'name' => 'Shahbaz',
                'email' => 'shahbaz@gmail.com',
                'password' => $password,
                'gender' => 'male',
                'address' => 'abc',
                'phone' => '567',
                'zip_code' => '52250',
                'dob' => '12-12-1996',
                'status' => 1,
                'api_token' => '',
                'avatar' => '',
                'rating' => '5',
            ),
        );
        foreach ($drivers as $driver)
        {
            App\Models\Driver::create($driver);
        }
    }
}
