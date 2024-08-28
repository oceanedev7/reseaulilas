<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_content extends Model
{
    use HasFactory;

    protected $fillable = [
        'horaire',
        'adresse',
        'telephone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
