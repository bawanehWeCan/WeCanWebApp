<?php
/** dev:
    *Stephen Isaac:  ofuzak@gmail.com.
    *Skype: ofuzak
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    
        use HasFactory;

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'storys';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
	
	/**
     * Attributes that should be cast to native types.
     *
     * @var string
     */
    

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        ''
   ];

    
}
