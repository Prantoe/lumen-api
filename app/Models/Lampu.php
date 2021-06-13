<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lampu extends Model
{
    protected $table = "lampu";
    protected $fillable  = array('nama','status');
}

?>