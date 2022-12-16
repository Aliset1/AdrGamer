<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'participants';

    protected $fillable = ['nombre','apellido','cedula','correo','telefono','id_equipo'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsins()
    {
        return $this->hasMany('App\Models\Inscriptionsin', 'id_participante', 'id');
    }
    
}
