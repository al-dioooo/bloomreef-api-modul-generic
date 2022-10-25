<?php

namespace Database\Seeders;

use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applications = [
            [
                'name' => 'Kaca Film',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Kasir',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Application::insert($applications);
    }
}
