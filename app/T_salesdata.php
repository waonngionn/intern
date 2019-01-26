<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_salesdata extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'product_no' => 'required',
      'product_cnt' => 'required'
    );
}
