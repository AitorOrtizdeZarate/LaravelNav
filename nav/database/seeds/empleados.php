<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class empleados extends Seeder
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
            'telefono' => '666666661'
        ]);
        $empleados =  DB::table('empleados')->insert([
            'nombre' => 'Adrian',
            'apellido' => 'Gomez',
            'email' => 'adrian@gmail.com',
            'telefono' => '666666662'
        ]);
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'Koldo',
            'apellido' => 'Intxausti',
            'email' => 'koldo@gmail.com',
            'telefono' => '666666663'
        ]);
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'David',
            'apellido' => 'Belintxon',
            'email' => 'david@gmail.com',
            'telefono' => '666666664'
        ]);
        $empleados = DB::table('empleados')->insert([
            'nombre' => 'Jefry',
            'apellido' => 'Molina',
            'email' => 'jefry@gmail.com',
            'telefono' => '666666665'
        ]);
    }
}
