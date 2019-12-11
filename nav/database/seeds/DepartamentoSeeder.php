<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = DB::table('departamentos')->insert([
            'nombre' => 'Informatica',
        ]);
        $departamentos = DB::table('departamentos')->insert([
            'nombre' => 'Economia',
        ]);
        $departamentos = DB::table('departamentos')->insert([
            'nombre' => 'Derecho',
        ]);
    }
}
