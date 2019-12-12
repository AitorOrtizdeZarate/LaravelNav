<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
	protected $table = 'empleados';
    protected $fillable = ['nombre','apellido','email','telefono', 'departamento_id'];

    public function proyecto(){
    	return $this->hasOne('App\proyecto');
    }

    public function departamento(){
    	return $this->belongsTo('App\departamento');
    }

}
