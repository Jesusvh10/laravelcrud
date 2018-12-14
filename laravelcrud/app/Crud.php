<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
    'share_name',
    'share_price',
    'share_qty'
  ];
}
