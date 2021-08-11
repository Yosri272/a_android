<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patien extends Model
{
    protected $table='patien';
    protected $fillable =
  [
    'p_name',
    'p_username',
    'e_mail',
    'p_password',
    'p_gender',
    'p_barthday',
    'p_phone'
   
    
 ];
}
