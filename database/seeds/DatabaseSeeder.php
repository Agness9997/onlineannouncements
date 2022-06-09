<?php

use Illuminate\Database\Seeder;
use App\User;
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
        // $this->call(UserSeeder::class);
        $adminUser = User::create([
            'user_name' => 'lucas.jilulu',
            'first_names' => 'Lucas',
            'last_name' => 'Jilulu',
            'email' => 'lucas.jilulu@yahoo.com',
            'password' => bcrypt('12345'),
            'phone_number' => '0627035174',
            'is_active' => true,
        ]);
        $admin = Role::create(['name' => 'admin']);

        $createuser = Permission::create(['name' => 'create user']);

        $admin->givePermissionTo($createuser);
    }
}
