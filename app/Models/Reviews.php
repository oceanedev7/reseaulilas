<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nom',
        'description',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
