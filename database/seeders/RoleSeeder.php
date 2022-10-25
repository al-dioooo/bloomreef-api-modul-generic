<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();

        $role->name = 'Super Administrator';
        $role->is_super = 1;
        $role->created_by = 'God';

        $role->save();

        $role->users()->attach(1);
    }
}
