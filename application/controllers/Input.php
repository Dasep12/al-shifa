<?php


/**
 * 
 */
class Input extends  CI_Controller
{
	
	public function index()
	{
		$this->template->load("template/template","input");
	}



	public function store()
	{

	}

	//kirim data harga
	public function harga()
	{

		$id = $this->input->post("id");
		if($id == 1){
			echo  json_encode(1000);
		}else {
			echo  json_encode(2000);
		}
	}
}