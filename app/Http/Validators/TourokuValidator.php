<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class TourokuVallidator extends Validator
{
  public function validateTouroku($attribute,$value,$parameters)
  {
    return $value % 2 == 0;
  }

  public function boot()
  {
	Validator::extend(‘useridcheck’, function($attribute, $value, $parameters, $validator){
		$param = [‘id’ => $value]
		$items = DB::select(‘select * from M_STAFF where id = :id’, $param);
		$result = !isset($items);
		return $result;
	 });
  }
}
