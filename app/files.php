<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
       protected $fillable = [
        'name', 'type', 'extension', 'user_id'
    ];

    public function user(){
    	return $this->belongsTo(User::class)
    }
}
