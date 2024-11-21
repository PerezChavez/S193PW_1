<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Juan',
                'apellido'=>'Perex',
                'correo'=>'Juan@gmail.com',
                'telefono'=>'+1237894560'
            ],
            [
                'nombre'=>'Camila',
                'apellido'=>'Arana',
                'correo'=>'Cam@gmail.com',
                'telefono'=>'+1234567890'
            ],
            [
                'nombre'=>'Pupe',
                'apellido'=>'Fuentes',
                'correo'=>'Pupe@gmail.com',
                'telefono'=>'+6737894560'
            ]
            ]);
    }
}
