<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class choose extends Model
{
    protected $table='choose';
    protected $fillable =
  [
    'name',
    'd_name',
    'teket',
    'day',
    'time'
   
    
 ];
}
