<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['nombre'];

    public function empleados(){
        return $this->hasMany('App\empleado');
    }

    public function jefe(){
        return $this->belongsTo('App\empleado', 'empleado_id');
    }
}
