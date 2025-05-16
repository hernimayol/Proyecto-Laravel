<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> 667f010 (Configuracion del modelo y migracion de Provincias)

class Provincia extends Model
{
    use SoftDeletes;

<<<<<<< HEAD
    //
        @var bool
    
    protected $primaryKey ='id';

        @var string
    
    protected $table ='provincias'
=======
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provincias';
>>>>>>> 667f010 (Configuracion del modelo y migracion de Provincias)

    protected $fillable = [
        'nombre',
        'codigo'
    ];
<<<<<<< HEAD

=======
>>>>>>> 667f010 (Configuracion del modelo y migracion de Provincias)
}
