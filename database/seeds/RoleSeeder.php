<?php

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
        $role_super_admin = new \App\Model\Role();
        $role_super_admin->name = 'super_admin';
        $role_super_admin->save();

        $role_admin = new \App\Model\Role();
        $role_admin->name = 'admin';
        $role_admin->save();

        $role_user = new \App\Model\Role();
        $role_user->name = 'user';
        $role_user->save();

        $role_teacher = new \App\Model\Role();
        $role_teacher->name = 'teacher';
        $role_teacher->save();
    }
}
