<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class];
        //admin
        Permission::create(['name'=>'create-users']);
        Permission::create(['name'=>'read-users']);
        Permission::create(['name'=>'update-users']);
        Permission::create(['name'=>'delete-users']);
        //project management
        Permission::create(['name'=>'create-project']);
        Permission::create(['name'=>'update-project']);
        Permission::create(['name'=>'delete-project']);
        Permission::create(['name'=>'create-project-deliverable']);
        Permission::create(['name'=>'update-project-deliverable']);//{only for project staff}
        Permission::create(['name'=>'delete-project-deliverable']);
        Permission::create(['name'=>'manage-project-service-provider']);
        Permission::create(['name'=>'manage-project-materials']);
        Permission::create(['name'=>'project-aproval']);//for  manager only
        Permission::create(['name'=>'project-management-report']);
        //procurement
        Permission::create(['name'=>'create-purchase-order']);
        Permission::create(['name'=>'update-purchase-order']);
        Permission::create(['name'=>'delete-purchase-order']);
        Permission::create(['name'=>'budget-approval']);
        Permission::create(['name'=>'make-purchases']);
        Permission::create(['name'=>'procurement-report']);//for manager
        //warehousing
        Permission::create(['name'=>'create-item']);
        Permission::create(['name'=>'update-item']);
        Permission::create(['name'=>'delete-item']);//for manager
        Permission::create(['name'=>'create-inventory']);
        Permission::create(['name'=>'update-inventory']);
        Permission::create(['name'=>'delete-inventory']);//for manager
        Permission::create(['name'=>'warehousing-report']);//for manager
        //asset management
        Permission::create(['name'=>'create-assets']);//for manager
        Permission::create(['name'=>'update-assets']);//for manager
        Permission::create(['name'=>'delete-assets']);//for manager

        $logisticsAdminRole = Role::create(['name'=>'logistics-admin']);
        $logisticsManagerRole = Role::create(['name'=>'logistics-manager']);
        $logisticsStaffRole = Role::create(['name'=>'logistics-staff']);
        $projectManagerRole = Role::create(['name'=>'project-manager']);
        $projetcStaffRole = Role::create(['name'=>'project-staff']);

        $logisticsAdminRole->givePermissionTo([
            'create-users',
            'read-users',
            'update-users',
            'delete-users',
            'create-project',
            'update-project',
            'delete-project',
        ]);
        $logisticsManagerRole->givePermissionTo([
            //manager only
            'project-aproval',//for approval of project
            'project-management-report',//for approval of project
            'procurement-report',//for approval of project
            'delete-item',
            'delete-inventory',
            'warehousing-report',
            'create-assets',
            'update-assets',
            'delete-assets',
            //from other role
            //project manager
            'create-project',
            'update-project',
            'delete-project',
            'create-project-deliverable',
            'update-project-deliverable',
            'delete-project-deliverable',
            'manage-project-service-provider',
            'manage-project-materials',
            'project-management-report',
        ]);
        $logisticsStaffRole->givePermissionTo([
            //procurement
            'create-purchase-order',
            'update-purchase-order',
            'delete-purchase-order',
            'budget-approval',
            'make-purchases',
            //warehousing
            'create-item',
            'update-item',
            'create-inventory',
            'update-inventory',
            //asset management
            'create-assets',
            'update-assets',
            'delete-assets',
        ]);
        $projectManagerRole->givePermissionTo([
            'create-project',
            'update-project',
            'delete-project',
            'create-project-deliverable',
            'update-project-deliverable',
            'delete-project-deliverable',
            'manage-project-service-provider',
            'manage-project-materials',
            'project-management-report',
        ]);
        $projetcStaffRole->givePermissionTo([
            'update-project-deliverable',
        ]);
    }
}
