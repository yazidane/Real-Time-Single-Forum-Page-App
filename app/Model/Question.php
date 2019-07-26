<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user(){
    	$this->belongsTo(User::class);
    }

    public function replies(){
    	$this->hasMany(Reply::class);
    }

    public function category(){
    	$this->belongsTo(Category::class);
    }

}
