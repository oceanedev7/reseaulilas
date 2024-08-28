<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number_content extends Model
{
    use HasFactory;

    protected $fillable = [
        'chiffre',
        'titre',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
