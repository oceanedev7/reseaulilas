<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join_network extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'description',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
