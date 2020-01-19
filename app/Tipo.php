<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo_incidente';
    protected $fillable = ['nome'];
    public $timestamps = false;


    public function incidente(){
        return $this->hasMany(Incidente::class);
    }
}
