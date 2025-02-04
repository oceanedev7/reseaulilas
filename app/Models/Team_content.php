<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_content extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'photo',
        'nom',
        'prenom',
        'fonction',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
