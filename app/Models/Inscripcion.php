<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    protected $fillable = [
        'id_campana',
        'id_usuario',
    ];

    public function campana()
    {
        return $this->belongsTo(Campana::class, 'id_campana');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
