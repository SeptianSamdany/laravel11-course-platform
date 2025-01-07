<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make some role.
        $ownerRole = Role::create([
            'name' => 'owner'
        ]); 
        $TeacherRole = Role::create([
            'name' => 'teacher'
        ]); 
        $studentRole = Role::create([
            'name' => 'student'
        ]); 

        $userOwner = User::create([
            'name' => 'Septian Samdani', 
            'occupation' => 'Educator', 
            'avatar' => 'images/default-avatar.png', 
            'email' => 'septian@owner.com', 
            'password' => bcrypt(12345678)
        ]);

        $userOwner->assignRole($ownerRole); 
    }
}
