<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'razonSocial', 'dni', 'genero','fechaNacimiento'];
    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
    public function personasCursos(){
        return $this->hasMany(PersonasCursos::class);
    }
}
