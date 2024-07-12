<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'nombre',
        'curso',
        'nota_1',
        'nota_2',
        'promedio',
        'condicion',
        'fecha_reg',
    ];

    // Establecer automáticamente el promedio y la condición cuando se asignan nota_1 o nota_2
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->promedio = ($model->nota_1 + $model->nota_2) / 2;
            $model->condicion = $model->promedio >= 14 ? 'Aprobado' : 'Desaprobado';
        });
    }
}
