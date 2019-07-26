<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    Public function Reply(){
    	return $this->belongsTo(Reply::class);
    }
}
