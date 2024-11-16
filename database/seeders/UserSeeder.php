<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dữ liệu mẫu cho bảng users
        $users = [
            [
                'name' => 'Super Admin',
                'phone_number' => 123456789,
                'password' => Hash::make('password123'),
                'role' => 1, // 1: Superadmin
            ],
            [
                'name' => 'Admin',
                'phone_number' => 987654321,
                'password' => Hash::make('password123'),
                'role' => 2, // 2: Admin
            ],
            [
                'name' => 'Regular User',
                'phone_number' => 555666777,
                'password' => Hash::make('password123'),
                'role' => 3, // 3: User
            ],
        ];

        // Thêm dữ liệu vào bảng users
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
