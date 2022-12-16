<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categories';

    protected $fillable = ['tipo'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'id_categoria', 'id');
    }
    
}
