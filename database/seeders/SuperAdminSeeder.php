<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Super Admin',
        'email' => 'superadmin@superadmin.com',
         'password' => Hash::make('superadmin@1234'),
         'guard_name' => 'web'
        ]);

        Role::create(['name' => 'Super Admin']);
        $user = User::findOrFail('1');
         $user->assignRole(['Super Admin']);
    }
}
