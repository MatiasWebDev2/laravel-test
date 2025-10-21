<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $fillable = [
        "nome", "cnpj"
    ];

    public function livros() {
        return $this->hasMany(Livro::class);
    }
}
