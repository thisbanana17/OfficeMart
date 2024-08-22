<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        //Crear un usuario administrador
        \App\Models\User::factory()->create([
            'name' => 'Administrador del sistema',
            'email' => 'admin@email.co',
            'rol' => 'admin'
            
        ]);

        //Crear 10 clientes 
        \App\Models\User::factory(10)->create();
    }
}