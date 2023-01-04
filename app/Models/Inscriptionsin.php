<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptionsin extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inscriptionsins';

    protected $fillable = ['fecha','tipo_pag','doc_pago','total','id_juego','id_participante'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function game()
    {
        return $this->hasOne('App\Models\Game', 'id', 'id_juego');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function participant()
    {
        return $this->hasOne('App\Models\Participant', 'id', 'id_participante');
    }
    
}
