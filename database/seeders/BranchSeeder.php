<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create([
            'name' => 'Bogor',
            'code' => 'bgr',
            'contact' => '6285173075151',
            'address' => 'Nowhere St. 17, Bogor City, Indonesia'
        ]);
    }
}
