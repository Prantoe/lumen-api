<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Greenhouse extends Model
{
    protected $table = "greenhouse";
    protected $fillable  = array('nama','status','kelembaban');
}

?>