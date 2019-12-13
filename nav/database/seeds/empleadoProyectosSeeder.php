<?php

use Illuminate\Database\Seeder;

class empleadoProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleadoProyectos = DB::table('empleado_proyecto')->insert([
            'proyecto_id' => rand(1,5),
            'empleado_id' => rand(1,5)
        ]);
        $empleadoProyectos = DB::table('empleado_proyecto')->insert([
            'proyecto_id' => rand(1,5),
            'empleado_id' => rand(1,5)
        ]);
        $empleadoProyectos = DB::table('empleado_proyecto')->insert([
            'proyecto_id' => rand(1,5),
            'empleado_id' => rand(1,5)
        ]);
        $empleadoProyectos = DB::table('empleado_proyecto')->insert([
            'proyecto_id' => rand(1,5),
            'empleado_id' => rand(1,5)
        ]);
        $empleadoProyectos = DB::table('empleado_proyecto')->insert([
            'proyecto_id' => rand(1,5),
            'empleado_id' => rand(1,5)
        ]);
        $empleadoProyectos = DB::table('empleado_proyecto')->insert([
            'proyecto_id' => rand(1,5),
            'empleado_id' => rand(1,5)
        ]);
    }
}
