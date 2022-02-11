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
            ['account_id' => '1', 'role_id' => 1, 'gender_id' => 1, 'first_name' => 'Minmin', 'middle_name' => '', 'last_name' => 'Minmin1', 'email' => 'minmin@mantap.com', 'password' =>bcrypt('pasrahajah'), 'display_picture_link' => 'admin/1.jpeg'],

            ['account_id' => '2', 'role_id' => 2, 'gender_id' => 2, 'first_name' => 'Userku', 'middle_name' => '', 'last_name' => 'Cantik1', 'email' => 'userku1@mantap.com', 'password' =>bcrypt('makanapaya'), 'display_picture_link' => 'user/1man.jpeg'],

            ['account_id' => '3', 'role_id' => 2, 'gender_id' => 1, 'first_name' => 'Userku', 'middle_name' => '', 'last_name' => 'Cantik2', 'email' => 'userku2@mantap.com', 'password' =>bcrypt('minumapaya'), 'display_picture_link' => 'user/2woman.jpeg']
            


        ]);
    }
}
