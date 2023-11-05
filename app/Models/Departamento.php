<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamento'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'iddepartamento'; // Clave primaria

    public $timestamps = false; // Si la tabla tiene columnas de created_at y updated_at

    protected $fillable = [
        'nombre',
    ];


    // Relación con la tabla departamento
    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_iddepartamento', 'iddepartamento');
    }

}
