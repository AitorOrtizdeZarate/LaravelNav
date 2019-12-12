<?php

use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'Aitor',
            'apellido' => 'Ortiz de Zarate',
            'email' => 'aitor@gmail.com',
            'telefono' => '666666661',
            'departamento_id'=> 1
        ]);
        $empleados =  DB::table('empleados')->insert([
            'nombre' => 'Adrian',
            'apellido' => 'Gomez',
            'email' => 'adrian@gmail.com',
            'telefono' => '666666662',
            'departamento_id'=> 2
        ]);
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'Koldo',
            'apellido' => 'Intxausti',
            'email' => 'koldo@gmail.com',
            'telefono' => '666666663',
            'departamento_id'=> 1
        ]);
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'David',
            'apellido' => 'Belintxon',
            'email' => 'david@gmail.com',
            'telefono' => '666666664',
            'departamento_id'=> 1
        ]);
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'Jefry',
            'apellido' => 'Molina',
            'email' => 'jefry@gmail.com',
            'telefono' => '666666665',
            'departamento_id'=> 3
        ]);
    }
}
