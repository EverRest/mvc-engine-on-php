<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	public $name;

	public $comment;

	public $timestamps = ['created_at', 'updated_at'];

	public $role;
}