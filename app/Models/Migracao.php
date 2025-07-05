<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migracao extends Model {
    
    //informando ao laravel que usará a tabela do schema migracao
    protected $table = 'migracao.migracao'; 

    public $timestamps = false;

    public $incrementing = false;  //não tem id

    protected $primaryKey = 'idmigracao'; 


    protected $fillable = [
        'cliente',
        'data_inicio_migracao',
        'data_fim_migracao',
        'data_inicio_implantacao',
        'data_fim_implantacao',
        'coordenador_projeto',
    ];

}
