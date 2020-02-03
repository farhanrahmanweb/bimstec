<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                "role_id"=> 1,
                "name"=>"Mr. Admin",
                "email"=>"admin@bimstec.com",
                "password"=>bcrypt('rootadmin')
            ]
        );
        DB::table('users')->insert(
            [
                "role_id"=> 2,
                "name"=>"Mr. Editor",
                "email"=>"editor@bimstec.com",
                "password"=>bcrypt('rooteditor')
            ]
        );
        DB::table('users')->insert(
            [
                "role_id"=> 3,
                "name"=>"Mr. Member",
                "email"=>"member@bimstec.com",
                "password"=>bcrypt('rootmember')
            ]
        );
    }
}
