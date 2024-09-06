<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Global_number_content extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
