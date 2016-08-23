<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{

	public $username;

	public $timestamps = ['created_at','updated_at'];
	
	protected $fillable = ['username', 'email','password'];
}