<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [ 
        "titulo",
        "isbn",
        "sinopse",
        "editora_id",
        "ano_publicacao",
        "numero_paginas",
    ];

    public function editora() {
        return $this->belongsTo(Editora::class);
    }
}
