<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'cpf',
        'birth',
        'genre',
        'user_id',
        'cities_id',
        
    ];

   /**
     * Relacionamento entre a tabela People--> User
     */

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

