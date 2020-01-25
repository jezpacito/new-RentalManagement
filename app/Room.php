<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='rooms';
    protected $fillable =['room_type','room_name','price'];

}
