<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $table='doctor';
    protected $fillable =
  [
    'd_name',
    'd_username',
    'd_password',
    'd_spe',
    'd_balans',
    'd_mo',
    'd_phone',
    'time',
    'd_city',
    'd_address',
    'd_mark',
    'd_flag'
   
    
 ];
}
