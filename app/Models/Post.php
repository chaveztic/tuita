<?php

namespace Tuita\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('Tuita\Models\User');
    }
}