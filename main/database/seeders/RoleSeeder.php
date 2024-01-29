<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Создание ролей пользователей
     */
    public function run(): void
    {
        // Суперпользователь - root
        $user_root = new Role();
        $user_root->name = 'Суперпользователь';
        $user_root->slug = 'root';
        $user_root->save();

        // Персонал - staff
        $user_staff = new Role();
        $user_staff->name = 'Персонал';
        $user_staff->slug = 'staff';
        $user_staff->save();
    }
}
