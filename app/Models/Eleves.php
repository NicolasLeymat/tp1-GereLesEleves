<?php

namespace App\Models;

class Eleves
{

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
