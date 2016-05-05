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
                'first_name'     => 'User 1',
                'middle_name' => 'm',
                'last_name' => 'Last',
                'service_no' => ++$serviceNo,
                'department' => 'Finance',
                'status' => 0,
                'employment_date' => '4th Nov, 2016',
                'user_id' => 1 //add another group to creat this entry - not admin
            ));

            PendingList::create(array(
                'first_name'     => 'User 2',
                'middle_name' => 'm',
                'last_name' => 'Last',
                'service_no' => ++$serviceNo,
                'department' => 'Engineering',
                'status' => 0,
                'employment_date' => '4th Nov, 2016',
                'user_id' => 1
            ));

            PendingList::create(array(
                'first_name'     => 'User 3',
                'middle_name' => 'm',
                'last_name' => 'Last',
                'service_no' => ++$serviceNo,
                'department' => 'Administration',
                'status' => 0,
                'employment_date' => '4th Nov, 2016',
                'user_id' => 1
            ));
            
        // }
    }
}
