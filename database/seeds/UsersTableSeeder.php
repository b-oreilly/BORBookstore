<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'admin')->first();

        $admin = new Role();
        $admin->name = 'B OReilly';
        $admin->email = 'admin@borbookstore.ie';
        $admin->password = bcrypt('secretpassword');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new Role();
        $user->name = 'John Smith';
        $user->email = 'johns@borbookstore.ie';
        $user->password = bcrypt('secretpassword');
        $user->save();
        $user->roles()->attach($role_user);
        }
}
