<?php

use Illuminate\Database\Seeder;

class proyectos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $proyectos = DB::table('proyectos')->insert([
            'id' => 'id',
            'nombre' => 'Aitor',
            'titulo' => 'Ortiz de Zarate',
            'fechainicio' => '2014/00/00',
            'fechafin' => '2015/02/06',
            'horasestimadas' => '10',
        ]);
       $proyectos = DB::table('proyectos')->insert([
            'id' => 'id',
            'nombre' => 'Aitor',
            'titulo' => 'Ortiz de Zarate',
            'fechainicio' => '2016/00/00',
            'fechafin' => '2017/02/06',
            'horasestimadas' => '8',
        ]);
       $proyectos = DB::table('proyectos')->insert([
            'id' => 'id',
            'nombre' => 'Aitor',
            'titulo' => 'Ortiz de Zarate',
            'fechainicio' => '2018/00/00',
            'fechafin' => '2019/02/06',
            'horasestimadas' => '6',
        ]);
    }
}
