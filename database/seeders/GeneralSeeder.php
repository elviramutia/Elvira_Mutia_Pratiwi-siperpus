<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasPermissions;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_pustakawan  = Role::create([
            'name' => 'pustakawan',
            'guard_name' => 'web',
        ]);

        $role_pustakawan  = Role::create([
            'name' => 'pustakawan',
            'guard_name' => 'web',
        ]);

        $pustakawan = User::create([
            'name' => 'Pustakawan 1',
            'email' => 'pustakawan1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $pustakawan->assignRole('pustakawan');


        $mahasiswa = User::create([
            'name' => 'Mahasiswa 1',
            'email' => 'mahasiswa1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $mahasiswa->assignRole('pustakawan');
    }
}
