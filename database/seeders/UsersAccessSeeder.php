<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UsersAccess;
use Illuminate\Support\Facades\Hash;

class UsersAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsersAccess::create([
            'name' => 'Admin',
            'phone' => '628',
            'email' => 'admin@admin.com',
            'password' => md5('admin'),
            'status' => 'active',
        ]);
    }
}
