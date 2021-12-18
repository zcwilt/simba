<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuper = Role::create(['name' => config('simba.superAdminRoleName')]);
        $roleSAdvertiser = Role::create(['name' => config('simba.advertiserRoleName')]);
    }
}
