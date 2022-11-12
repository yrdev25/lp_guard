<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([SuperAdminSeeder::class]);
        
        Permission::create(['guard_name' => 'company_one', 'name' => 'add_employee']);
        Permission::create(['guard_name' => 'company_one', 'name' => 'edit_employee']);
        Permission::create(['guard_name' => 'company_one', 'name' => 'delete_employee']);
          Permission::create(['guard_name' => 'company_two', 'name' => 'add_employee']);
          Permission::create(['guard_name' => 'company_two', 'name' => 'edit_employee']);
          Permission::create(['guard_name' => 'company_two', 'name' => 'delete_employee']);
          Permission::create(['guard_name' => 'company_three', 'name' => 'add_employee']);
          
         Permission::create(['guard_name' => 'company_three', 'name' => 'edit_employee']);
           Permission::create(['guard_name' => 'company_three', 'name' => 'delete_employee']);

           Role::create(['guard_name' => 'company_one', 'name' => 'admin']);
           Role::create(['guard_name' => 'company_one', 'name' => 'hr']);
           Role::create(['guard_name' => 'company_one', 'name' => 'employee']);
           Role::create(['guard_name' => 'company_two', 'name' => 'admin']);
           Role::create(['guard_name' => 'company_two', 'name' => 'hr']);
           Role::create(['guard_name' => 'company_two', 'name' => 'employee']);
          Role::create(['guard_name' => 'company_three', 'name' => 'admin']);
         Role::create(['guard_name' => 'company_three', 'name' => 'hr']);
           Role::create(['guard_name' => 'company_three', 'name' => 'employee']);
    }
}
