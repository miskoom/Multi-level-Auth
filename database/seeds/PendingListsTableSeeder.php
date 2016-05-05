<?php

use Illuminate\Database\Seeder;

use App\PendingList;

class PendingListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pending_lists')->delete();
        // for ($i=0; $i < 10; $i++) {
        $serviceNo = 0;
            PendingList::create(array(
                'first_name'     => 'John',
                'middle_name' => '',
                'last_name' => 'Doe',
                'service_no' => '4582421',
                'department' => 'Finance',
                'status' => 0,
                'employment_date' => '4th Nov, 2016',
                'user_id' => 1 //add another group to creat this entry - not admin
            ));

            PendingList::create(array(
                'first_name'     => 'Aaron',
                'middle_name' => 'M.',
                'last_name' => 'Smith',
                'service_no' => '4582426',
                'department' => 'Engineering',
                'status' => 0,
                'employment_date' => '4th Nov, 2016',
                'user_id' => 1
            ));

            PendingList::create(array(
                'first_name'     => 'Larry',
                'middle_name' => '',
                'last_name' => 'Wall',
                'service_no' => '4582424',
                'department' => 'Administration',
                'status' => 0,
                'employment_date' => '4th Nov, 2016',
                'user_id' => 1
            ));
            
        // }
    }
}
