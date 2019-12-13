<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fecha = date('Y/m/d');
  
        for ($i=0;$i<5;$i++) {
            $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
            $fechainicio = date ( 'Y/m/d' , $fechainicio);
      
            $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
            $fechafin = date ( 'Y/m/d' , $fechafin );
        $proyectos = DB::table('proyectos')->insert([
            'nombre' => 'Aitor'.($i+1),
            'titulo' => 'Esturi'.($i+1),
            'fechainicio' => $fechainicio,
            'fechafin' => $fechafin,
            'horasestimadas' => rand(500,3000),
            'empleado_id' => rand(1,5)
        ]);
   		}
    }
}
