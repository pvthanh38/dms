<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesDiscount extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sales_discounts';
	
	protected $keycache = 'cache_sales_discounts_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
