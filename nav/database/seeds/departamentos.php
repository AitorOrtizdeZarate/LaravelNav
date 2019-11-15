<?php

use Illuminate\Database\Seeder;

class departamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = DB::table('departamentos')->insert([
            'id' => 'id',
            'nombre' => 'departamento1',
        ]);
        $departamentos = DB::table('departamentos')->insert([
            'id' => 'id',
            'nombre' => 'departamento2',
        ]);
        $departamentos = DB::table('departamentos')->insert([
            'id' => 'id',
            'nombre' => 'departamento3',
        ]);
    }
}
