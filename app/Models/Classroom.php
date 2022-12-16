<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'classrooms';

    protected $fillable = ['numeroAula','bloque'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'id_aula', 'id');
    }
    
}
