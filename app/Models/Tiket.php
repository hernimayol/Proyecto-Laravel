<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Tiket extends Model
{
    

    protected $table = 'tikets';
    protected $primaryKey='id';
    protected $timestamps=true;

    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'usuario_id',
    ];

    public function comentarios(): HasMany{
        return $this->hasMany(TiketComentario::class,'tiket_id');
    }
}
