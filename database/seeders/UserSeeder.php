<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Alice Evergarden',
                'application_id' => 2,
                'country_code' => 62,
                'phone' => '6285173075151',
                'password' => bcrypt('aldio1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Alicia Endeavour',
                'application_id' => 2,
                'country_code' => 62,
                'phone' => '6289518118820',
                'password' => bcrypt('aldio1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        User::insert($user);
    }
}
