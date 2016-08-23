<?php

if (isset($_GET['action'])) {
$act = $_GET['action'];
	if (!empty($act)) {
		switch ($act) {
			
			case 'initpage':
				echo 'loading comments';
				break;
			
			case 'addcomment':
				echo $_GET['name'].'-'.$_GET['email'].'-'.$_GET['site'].'-'.$_GET['message'];
				break;

			case 'authent':
				echo $_GET['name'].'-'.$_GET['email'].'-'.$_GET['password']; 
				break;
		
			case 'registr':
				echo $_GET['name'].'-'.$_GET['email'].'-'.$_GET['password']; 
				break;

			case 'sort':
				echo $_GET['name'].'-'.$_GET['email'].'-'.$_GET['password']; 
				break;
		}
	}
}