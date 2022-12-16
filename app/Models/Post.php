<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'post';
    
    protected $fillable = ['mensaje', 'idusuario'];
    
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'idusuario');
    }
    
    public function comments () {
        return $this->hasMany ('App\Models\Comment', 'idpost');
    }

}
