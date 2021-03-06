<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 2,
            'first_name' => 'Mr.',
            'last_name' => 'Administrator',
            'father_name' => 'Administrator',
            'mother_name' => 'Administrator',
            'username' => 'administrator',
            'email' => 'administrator@knostruktion.com',
            'password' => Hash::make('123456789'),
            'mobile' => 1726447799,
            'address' => '320/1, Dr. x Street, Alpha-1200',
            'section' => 'Administrator',
            'salary' => 10000.00,
            'bio' => 'administrator',
            'ip_address' => '192.168.20.15',
            'last_login' => Carbon::now(),
            'nid' => 1995263202111115,
            'image' => null,
            'email_verified_at' => Carbon::now('Asia/Dhaka'),
            'created_at' => Carbon::now('Asia/Dhaka'),
            'updated_at' => Carbon::now('Asia/Dhaka')
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'first_name' => 'Alpha',
            'last_name' => 'Dr.',
            'father_name' => 'Dr. Abdur Rouf',
            'mother_name' => 'Dr. Sufia Begum',
            'username' => 'alpha',
            'email' => 'alpha@dev.com',
            'password' => Hash::make('123456789'),
            'mobile' => 1726447788,
            'address' => '320/1, Dr. x Street, Alpha-1200',
            'section' => 'Software Engineer',
            'salary' => 800000.00,
            'bio' => 'Software Engineer',
            'ip_address' => '192.168.0.15',
            'last_login' => Carbon::now(),
            'nid' => 1995263202000005,
            'image' => null,
            'email_verified_at' => Carbon::now('Asia/Dhaka'),
            'created_at' => Carbon::now('Asia/Dhaka'),
            'updated_at' => Carbon::now('Asia/Dhaka')
        ]);

        DB::table('users')->insert([
            'role_id' => 6,
            'first_name' => 'Mr.',
            'last_name' => 'Spy',
            'father_name' => 'Spy',
            'mother_name' => 'spy',
            'username' => 'Spy',
            'email' => 'spy@knostruktion.com',
            'password' => Hash::make('123456789'),
            'mobile' => 1726447777,
            'address' => '320/1, Dr. x Street, Alpha-1200',
            'section' => 'Client',
            'salary' => 10000.00,
            'bio' => 'Client',
            'ip_address' => '192.168.20.15',
            'last_login' => Carbon::now('Asia/Dhaka'),
            'nid' => 19952632021118815,
            'image' => null,
            'email_verified_at' => Carbon::now('Asia/Dhaka'),
            'created_at' => Carbon::now('Asia/Dhaka'),
            'updated_at' => Carbon::now('Asia/Dhaka')
        ]);
    }
}
