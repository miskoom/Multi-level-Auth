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
            'name'     =>   'Christian Akpabio',
            'email'    =>   'a@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'Lillian Galadima',
            'email'    =>   'b@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'Ernest Offiong',
            'email'    =>   'c@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'Joseph John',
            'email'    =>   'd@nhubnigeria.com',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
    //     User::create(array(
    //         'name'     =>   'Feyit Stephen',
    //         'email'    =>   'e@nhubnigeria.com',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
        
    //     User::create(array(
    //         'name'     =>   'Madaki Fatson',
    //         'email'    =>   'f@nhubnigeria.com',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
        
    //     User::create(array(
    //         'name'     =>   'Retnan Daser',
    //         'email'    =>   'g@nhubnigeria.com',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
        
    //     User::create(array(
    //         'name'     =>   'Esther Idika',
    //         'email'    =>   'h@nhubnigeria.com',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
    }
}
