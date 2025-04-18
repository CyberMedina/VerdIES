<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table="categoria";
    use HasFactory;
    public function materiales()
    {
        return $this->hasMany(Materiales::class);
    }
    public function promociones()
    {
        return $this->hasMany(Promociones::class);
    }
}
