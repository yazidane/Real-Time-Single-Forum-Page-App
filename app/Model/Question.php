<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	//replace the id when search
	public function getRouteKeyName(){
		return 'slug';
	}

	//----if you want to define save to spesific/not many column
	//protected $fillable = ['title','slug','body','category_id','user_id'];


	//-------use to save to all
	protected $guarded = [];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function replies(){
    	return $this->hasMany(Reply::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    //
    public function getPathAttribute(){
    	return asset("api/question/$this->slug");
    }

}
