<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Facade\Ignition\IgnitionServiceProvider;

class Order extends Model
{
    //

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table = ['orders'];

    protected $fillable = ['name', 'price'];



}
