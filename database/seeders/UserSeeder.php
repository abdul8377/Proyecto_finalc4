<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'kenny aquino amachi',
            'email'=>'kenny.amachi@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);
        $user->assignRole('Administrador');

        //Vendedor
        $user=User::create([
            'name'=>'Juan Perez Perez',
            'email'=>'juan@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);
        $user->assignRole('Vendedor');
        //Clientes
        $users=User::factory(3)->create();
        foreach ($users as $user) {
            $user->assignRole('Cliente');
        }

    }
}
