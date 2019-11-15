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
            'nombre' => 'departamento1',
        ]);
        $departamentos = DB::table('departamentos')->insert([
            'nombre' => 'departamento2',
        ]);
        $departamentos = DB::table('departamentos')->insert([
            'nombre' => 'departamento3',
        ]);
    }
}
