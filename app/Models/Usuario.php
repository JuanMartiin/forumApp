<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    protected $table = 'usuario';
    
    protected $fillable = ['nombre', 'correo', 'fechaNacimiento'];
    
    public function post(){
        return $this->hasMany('App\Models\Post', 'idusuario');
    }
    
    public function comment(){
        return $this->hasMany('App\Models\Comment', 'idusuario');
    }
    
    
}
