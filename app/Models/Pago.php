<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    //pago pertenece a un empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
