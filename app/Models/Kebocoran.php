<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebocoran extends Model
{
    protected $table = "gas";
    protected $fillable  = array('nama','status','gas');
}

?>