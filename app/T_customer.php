<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_customer extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'customer_name' => 'required'
    );
}
