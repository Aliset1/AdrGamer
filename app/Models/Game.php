<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'games';

    protected $fillable = ['nombre','reglas','valor','id_categoria','id_aula'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom()
    {
        return $this->hasOne('App\Models\Classroom', 'id', 'id_aula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsgrs()
    {
        return $this->hasMany('App\Models\Inscriptionsgr', 'id_juego', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsins()
    {
        return $this->hasMany('App\Models\Inscriptionsin', 'id_juego', 'id');
    }
    
}
