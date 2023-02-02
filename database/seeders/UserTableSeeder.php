<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Website Administrator';
        $admin->username = 'admin';
        $admin->email = 'adisepriyadi0@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    
        $admin = new User;
        $admin->name = 'Website User';
        $admin->username = 'user';
        $admin->email = 'user@gmail.com';
        $admin->password = Hash::make('password');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'user')->first());
    }
}
