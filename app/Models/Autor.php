<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'blg-autors';
    protected $primaryKey = 'autor_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'city',
        'semester',
        'program',
        'state',
        'created_at'
    ];
}
