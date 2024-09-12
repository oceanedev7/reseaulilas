<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formules extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titre',
        'photo',
        'presentation',
        'description1',
        'description2',
        'description3',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
