<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    //un empleado pertenece a un cargo
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    //un empleado puede tener muchos pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
    

}
