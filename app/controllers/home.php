<?php

class home extends Controller
{

	protected $user;

	public function __construct() 
	{
		$this->user = $this->model('User');
	}

	public function index($username = '',$email = '',$password = '')
	{
		/*$user = $this->model('User');*/
		$user = $this->user;
		$user->username = $username;
		$user->email = $email;
		$user->password = $password;

		$this->view('home/index', ['name' => $user->username,'pass' => $user->password,'email' => $user->email]);
	}

	

	public function create($username = '', $email = '', $password = '') {	
		User::create([
			'username' => $username,
			'password' => $password,
			'email' => $email
		]);
	}
}