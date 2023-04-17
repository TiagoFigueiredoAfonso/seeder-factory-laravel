<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'nome' => 'Supermercado Comer Bem',
            'endereco' => 'Av. dos Cantares, n° 321',
            'estado' => 'MG'
        ]);
        Empresa::create([
            'nome' => 'Supermercado Vale Verde',
            'endereco' => 'Av. dos Alabamas, n° 1521',
            'estado' => 'SP'
        ]);
        Empresa::create([
            'nome' => 'Supermercado Amazonas',
            'endereco' => 'Rua Dom Bento Barbosa, n° 4559',
            'estado' => 'RS'
        ]);
    }
}
