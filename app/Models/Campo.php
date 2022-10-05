<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ficha;

class Campo extends Model
{
    use HasFactory;
    protected $table = 'campos';
    protected $fillable = ['descricao'];

    public function ficha() {
        return $this->hasMany(Ficha::class, 'campo_id', 'id');
    }
}
