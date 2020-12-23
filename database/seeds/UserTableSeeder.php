<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@correo.co',
            'password' => Hash::make('1234'),
          ]);

          $user->roles()->attach(Role::where('name', 'admin')->first());

          $user = User::create([
            'name' => 'User1',
            'email' => 'user1@correo.co',
            'password' => Hash::make('1234'),
          ]);

          $user->roles()->attach(Role::where('name', 'user')->first());


          $user = User::create([
            'name' => 'User2',
            'email' => 'user2@correo.co',
            'password' => Hash::make('1234'),
          ]);

          $user->roles()->attach(Role::where('name', 'error')->first());
    }
}
