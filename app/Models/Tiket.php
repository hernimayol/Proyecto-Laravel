<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Tiket extends Model
{
    

    protected $table = 'tikets';
    protected $primaryKey='id';
    public $timestamps=true;

    protected $fillable = [
        'titulo',
        'descripcion',
    //    'estado',
        'provincia_id',
    //    'usuario_id',
    ];

    public function provincia()
        {
            return $this->belongsTo(Provincia::class, 'provincia_id','id');
        }

    public function comentarios(): HasMany{
        return $this->hasMany(TiketComentario::class,'tiket_id');
    }
}
