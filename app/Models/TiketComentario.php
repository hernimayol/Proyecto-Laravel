<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TiketComentario extends Model
{
    protected $table = 'tiket_comentarios';
    protected $primaryKey='id';
    public $timestamps=true;

    protected $fillable = [
        'tiket_id',
        'usuario_id',
        'comentario',
        
    ];

    public function tiket(): BelongsTo{
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }
    
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
