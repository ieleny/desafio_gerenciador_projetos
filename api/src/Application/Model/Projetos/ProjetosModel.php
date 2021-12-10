<?php

namespace App\Application\Model\Projetos;

use Illuminate\Database\Eloquent\Model as Model;

class ProjetosModel extends Model
{
    protected $table = 'projetos';
    protected $fillable = ['projetos_nome'];
    public $timestamps = false;
}
