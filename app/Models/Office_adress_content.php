<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_adress_content extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'adresse_postale',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
