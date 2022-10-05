<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campo;
use App\Models\Faixa;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'fichas';
    protected $fillable = ['campo_id', 'faixa_id', 'codigo', 'objetivos', 'abordagem', 'sugestoes' , 'recurso' , 'link_recurso' , 'propaganda' , 'link_propaganda'];

    public function campo() {
        return $this->belongsTo(Campo::class, 'campo_id', 'id');
    }

    public function faixa() {
        return $this->belongsTo(Faixa::class, 'faixa_id', 'id');
    }

}
