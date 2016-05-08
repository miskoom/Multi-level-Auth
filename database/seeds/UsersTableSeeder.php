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
            'name'     =>   'Payroll Super User',
            'email'    =>   'super@payroll.ng',
            'access_role' =>  'supergod',
            'password' =>   Hash::make('yahweh'),
        ));
        
        User::create(array(
            'name'     =>   'Payroll Manager',
            'email'    =>   'info@payroll.ng',
            'access_role' =>  'god',
            'password' =>   Hash::make('yahweh'),
        ));
        
        User::create(array(
            'name'     =>   'Christian Akpabio',
            'email'    =>   'a@payroll.ng',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'Lillian Galadima',
            'email'    =>   'b@payroll.ng',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'Ernest Offiong',
            'email'    =>   'c@payroll.ng',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
        User::create(array(
            'name'     =>   'Joseph John',
            'email'    =>   'd@payroll.ng',
            'access_role' =>  'user',
            'password' =>   Hash::make('password'),
        ));
        
    //     User::create(array(
    //         'name'     =>   'Feyit Stephen',
    //         'email'    =>   'e@payroll.ng',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
        
    //     User::create(array(
    //         'name'     =>   'Madaki Fatson',
    //         'email'    =>   'f@payroll.ng',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
        
    //     User::create(array(
    //         'name'     =>   'Retnan Daser',
    //         'email'    =>   'g@payroll.ng',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
        
    //     User::create(array(
    //         'name'     =>   'Esther Idika',
    //         'email'    =>   'h@payroll.ng',
    //         'access_role' =>  'user',
    //         'password' =>   Hash::make('password'),
    //     ));
    }
}
