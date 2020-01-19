<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $table = 'incidente';
    protected $fillable = [
        'titulo',
        'id_criticidade',
        'status',
        'descricao',
        'id_tipo'
    ];

    public function criticidade(){
        return $this->belongsTo(Criticidade::class, 'id_criticidade','id');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class, 'id_tipo','id');
    }
}
