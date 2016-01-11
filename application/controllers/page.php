<?php

class Page extends CI_Controller {

	public function view($page = 'home')
	{

		

		$data['title'] = ucfirst($page); // Capitalize the first letter
		//$this->load->view('page/'.$page, $data);
		var_dump($data);


	}	


}