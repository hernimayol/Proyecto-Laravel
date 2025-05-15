<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use SoftDeletes;

    //
        @var bool
    
    protected $primaryKey ='id';

        @var string
    
    protected $table ='provincias'

    protected $fillable = [
        'nombre',
        'codigo'
    ];

}
