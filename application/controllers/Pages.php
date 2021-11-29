<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	//  home default page
	public function home()	
	{	
        
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/home');
		$this->load->view('templates/layouts/footer');	
	}

	
	
}
