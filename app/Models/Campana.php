<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campana extends Model
{
    protected $table = 'campanas';

    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
        'descripcion',
        'ubicacion',
        'telefono',
        'correo',
        'id_user'
    ];
    
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_campana');
    }
}
