<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrador'
        ]);

        Role::create([
            'name' => 'user',
            'description' => 'Usuario'
        ]);

        Role::create([
            'name' => 'error',
            'description' => 'Error'
        ]);
    }
}
