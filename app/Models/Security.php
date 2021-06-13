<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    protected $table = "home_security";
    protected $fillable  = array('nama','status');
}

?>