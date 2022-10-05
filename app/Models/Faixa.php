<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ficha;

class Faixa extends Model
{
    use HasFactory;
    protected $table = 'faixas';
    protected $fillable = ['descricao'];

    public function ficha() {
        return $this->hasMany(Ficha::class, 'ficha_id', 'id');
    }
}
