<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = ['nombre','titulo','fechainicio','fechafin', 'horasestimadas'];

     public function empleado(){
        return $this->belongsTo('App\empleado');
    }

    public function empleados(){
        return $this->belongsToMany('App\empleado');
    }
}
