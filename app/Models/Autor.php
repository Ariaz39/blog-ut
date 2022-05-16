<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'blg-autors';
    protected $primaryKey = 'autor_id';

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'city',
        'state',
        'created_at'
    ];
}
