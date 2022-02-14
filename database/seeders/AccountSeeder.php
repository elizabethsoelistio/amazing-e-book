<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            ['account_id' => '1', 'role_id' => 1, 'gender_id' => 1, 'first_name' => 'Admin', 'middle_name' => '', 'last_name' => '1', 'email' => 'admin1@admin.com', 'password' =>bcrypt('admin1admin'), 'display_picture_link' => 'admin/1.jpeg'],

            ['account_id' => '2', 'role_id' => 2, 'gender_id' => 2, 'first_name' => 'User', 'middle_name' => '', 'last_name' => '1', 'email' => 'user1@user.com', 'password' =>bcrypt('user1user'), 'display_picture_link' => 'user/1man.jpeg'],

            ['account_id' => '3', 'role_id' => 2, 'gender_id' => 1, 'first_name' => 'User', 'middle_name' => '', 'last_name' => '2', 'email' => 'user2@user.com', 'password' =>bcrypt('user2user'), 'display_picture_link' => 'user/2woman.jpeg']
            


        ]);
    }
}
