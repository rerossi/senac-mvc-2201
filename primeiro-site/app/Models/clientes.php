<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $fillable = [ 'id',
                            'nome',
                            'endereco',
                            'telefone',
                            'email'
                          ];

    protected $table = 'Clientes';
}
