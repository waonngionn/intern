<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_product extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'product_name' => 'required',
      'product_cost' => 'required'
    );
}
