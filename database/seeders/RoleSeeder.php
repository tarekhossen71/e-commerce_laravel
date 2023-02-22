<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_permission = Permission::all();
        
            Role::create([
                'name' => 'Super Admin',
                'slug' => 'super-admin'
            ])->permissions()->sync($all_permission->pluck('id'));
            Role::create([
                'name' => 'Admin',
                'slug' => 'admin'
            ])->permissions()->sync($all_permission->pluck('id'));
            Role::create([
                'name' => 'Client',
                'slug' => 'client'
            ]);
    
    }
}
