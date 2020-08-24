<?php

use Illuminate\Database\Seeder;
use App\Model\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Role $role_admin */
        $role_admin = Role::where('name', 'super_admin')->first();

        $admin = new \App\Model\User();
        $admin->name = 'Admin';
        $admin->surname = 'Doe';
        $admin->email = 'admin@runwaytraining.co.uk';
        $admin->password = \Illuminate\Support\Facades\Hash::make('secret');

        $admin->role()->associate($role_admin);
        $admin->save();
    }
}
