<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_offers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titre',
        'description',
        'photo',
        'qualification',
        'mission',
        'lieu',
        'salaire',
        'type_contrat',
        'email',
        'telephone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
