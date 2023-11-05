<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $table = 'distrito'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'iddistrito'; // Clave primaria

    public $timestamps = false; // Si la tabla tiene columnas de created_at y updated_at

    protected $fillable = [
        'name',
    ];


    // Relación con la tabla provincia
    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'provincia_idprovincia', 'idprovincia');
    }
}
