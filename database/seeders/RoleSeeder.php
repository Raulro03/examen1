<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador de la aplicación – Puede hacer y deshacer todo'
        ]);
        Role::factory()->create([
            'name' => 'creator',
            'display_name' => 'Creador',
            'description' => 'Puede crear post y modificarlos mientras estén en modo draft.'
        ]);
        Role::factory()->create([
            'name' => 'editor',
            'display_name' => 'editor',
            'description' => 'Puede editar un post solo si está en modo pending'
        ]);
        Role::factory()->create([
            'name' => 'validator',
            'display_name' => 'Verificador',
            'description' => 'Puede cambiar el estado de un post de pending a published.'
        ]);
        Role::factory()->create([
            'name' => 'eraser',
            'display_name' => 'Eliminador',
            'description' => 'puede borrar un post en cualquier momento'
        ]);
        Role::factory()->create([
            'name' => 'reader',
            'display_name' => 'Lector',
            'description' => 'solo puede acceder al listado de los posts y a cada uno de ellos de manera individual'
        ]);
    }
}
