<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kipas extends Model
{
    protected $table = "kipas";
    protected $fillable  = array('nama','status','suhu');
}

?>