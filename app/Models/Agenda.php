<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'categorie',
        'titre',
        'photo',
        'lieu',
        'date',
        'heure_debut',
        'heure_fin',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
