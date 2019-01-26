<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_sale extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'sales_day' => 'required',
      'customer_no' => 'required'
    );
}
