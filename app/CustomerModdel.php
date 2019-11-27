<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerModdel extends Model
{

use SoftDeletes;
protected $fillable = [];
}
