<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner_signup extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'raison_sociale',
        'fonction',
        'email',
        'telephone',
        'adresse_postale',
        'ville',
        'code_postal',
        'type',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
