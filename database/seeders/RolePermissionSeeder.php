<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $super_admin_view=Permission::create([
            'name'=>'super_admin_view',
            'guard_name'=>'web',
        ]);
       $admin_view= Permission::create([
            'name'=>'admin_view',
            'guard_name'=>'web',
        ]);
        $agent_view=Permission::create([
            'name'=>'agent_view',
            'guard_name'=>'web',
        ]);
        $super_admin=Role::create([
            'name'=>'super_admin',
            'guard_name'=>'web',
        ]);
     
       $admin= Role::create([
            'name'=>'admin',
            'guard_name'=>'web',
        ]);

       $agent= Role::create([
            'name'=>'agent',
            'guard_name'=>'web',
        ]);

        $super_admin->givePermissionTo($super_admin_view->name);
        $admin->givePermissionTo($admin_view->name);
        $agent->givePermissionTo($agent_view->name);

 
    }
}
