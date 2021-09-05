<?php


/**
 * 
 */
class Home extends  CI_Controller
{
	
	public function index()
	{
		$this->template->load("template/template","home");
	}
}