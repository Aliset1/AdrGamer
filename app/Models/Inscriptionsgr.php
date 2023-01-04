<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptionsgr extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inscriptionsgrs';

    protected $fillable = ['fecha','tipo_pag','doc_pago','total','id_juego','id_equipo'];
	
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
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'id_equipo');
    }
    
}
