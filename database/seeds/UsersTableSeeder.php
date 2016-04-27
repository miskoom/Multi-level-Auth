<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     =>   'nHub Nigeria',
            'email'    =>   'info@nhubnigeria.com',
            'access_role' =>  'god',
            'password' =>   Hash::make('yahweh'),
        ));
        
        User::create(array(
            'name'     =>   'User I',
            'email'    =>   'a@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User II',
            'email'    =>   'b@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User III',
            'email'    =>   'c@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User IV',
            'email'    =>   'd@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User V',
            'email'    =>   'e@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User VI',
            'email'    =>   'f@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User VII',
            'email'    =>   'g@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'User VIII',
            'email'    =>   'h@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
    }
}
