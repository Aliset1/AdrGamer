<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'teams';

    protected $fillable = ['nombre'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsgrs()
    {
        return $this->hasMany('App\Models\Inscriptionsgr', 'id_equipo', 'id');
    }
    
}
