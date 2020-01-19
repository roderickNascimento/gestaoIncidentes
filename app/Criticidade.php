<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criticidade extends Model
{
    protected $table = 'criticidade';
    protected $fillable = [
        'nome'
    ];
    public $timestamps = false;


    public function incidente(){
        return $this->hasMany(Incidente::class);
    }
}
