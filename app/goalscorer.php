<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class goalscorer extends Model
{

	/**
   * The database table used by the model.
   *
   * @var string
   */
  	protected $table = 'goalscorers';

	/**
	* The database primary key value.
	*
	* @var string
	*/
	protected $guarded = ['id', '_token'];

    /**
    * Attributes that should be mass-assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'city',
        'state',
        'zip_code',
    ];

    /**
    * The roles that belong to the Customer.
    */
    public function users()
  	{
    	return $this->belongsTo('App\User', 'id');
  	}
}
