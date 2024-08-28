<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer_signup extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse_postale',
        'ville',
        'code_postal',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
