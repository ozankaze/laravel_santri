<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    // yang singular 1
    // plural banyak tambahin s
    
    public $timestamps = false;
    protected $fillable = ['name', 'address', 'status'];
}
