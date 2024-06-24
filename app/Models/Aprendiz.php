<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
    protected $table='aprendizs';
    protected $primaryKey='id';
    protected $fillable=['cedula', 'nombre','ápellido','correo','telefono'];
    protected $guarded=[];
    public $timestamps=false;
}
