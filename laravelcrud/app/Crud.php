<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crud extends Model
{
    
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = [
    'share_name',
    'share_price',
    'share_qty'
  ];
}
