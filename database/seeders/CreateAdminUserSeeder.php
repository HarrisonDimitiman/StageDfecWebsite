<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin', 
            'image' => 'No Image', 
            'position' => 'Admin', 
            'name' => 'Admin', 
            'email' => 'admin@dfec.com',
            'password' => bcrypt('Password')
        ]);
    
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);


        $role2 = Role::create(['name' => 'Kuya']);
        $permissions2 = Permission::pluck('id','id')->all();
        $role2->syncPermissions($permissions2);
    }
}
