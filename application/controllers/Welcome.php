<?php


/**
 * 
 */
class Welcome extends CI_Controller
{
	public function index()
	{
	

	}

	public function create()
	{
		$file = fopen("./assets/test12121" .date('s') .  ".txt", "w");	
		fwrite($file,"Selamat siang gengs");
		fclose($file);	
		# code...
	}
}