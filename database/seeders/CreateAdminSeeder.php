<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrNew(['email' => 'admin@example.com']);
        $admin->name = "Admin User";
        $admin->password = Hash::make('Admin123');
        $admin->user_type = "Admin";
        $admin->save();
    }
}
