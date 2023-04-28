<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'legajo'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
