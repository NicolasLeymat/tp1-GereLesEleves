<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Eleves extends Model
{

    protected $primaryKey = "id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom', 
        'prenom', 
        'date naissance', 
        'numéro étudiant',
        'email',
        'image'
    ];
}
