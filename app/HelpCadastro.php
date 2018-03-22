<?php

namespace HelpNow;

use Illuminate\Database\Eloquent\Model;

class HelpCadastro extends Model
{
    protected $tabela = 'help_cadastro';
    protected $primarykey = 'id_helps';

    public $timestamps = false;
    protected $fillable = [

    	'problema',
    	'descricao',
    	'status'
    ];

    protected $guarded[];
}
