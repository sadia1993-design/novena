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

	//error page 
	public function error()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/error');
		$this->load->view('templates/layouts/footer');
	}

	//about page 
	public function about()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/about');
		$this->load->view('templates/layouts/footer');
	}

	//service page 
	public function service()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/service');
		$this->load->view('templates/layouts/footer');
	}

	//department page 
	public function department()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/department');
		$this->load->view('templates/layouts/footer');
	}

	//departmentSingle page 
	public function departmentSingle()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/department-single');
		$this->load->view('templates/layouts/footer');
	}

	//contact page 
	public function contact()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/contact');
		$this->load->view('templates/layouts/footer');
	}

	//blogSingle page 
	public function blogSingle()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/blog-single');
		$this->load->view('templates/layouts/footer');
	}

	//blogSidebar page 
	public function blogSidebar()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/blog-sidebar');
		$this->load->view('templates/layouts/footer');
	}

	//doctors page 
	public function doctors()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/doctor');
		$this->load->view('templates/layouts/footer');
	}

	//doctorSingle page 
	public function doctorSingle()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/doctor-single');
		$this->load->view('templates/layouts/footer');
	}

	//appointment page 
	public function appointment()
	{
		$this->load->view('templates/layouts/header');
		$this->load->view('templates/pages/appointment');
		$this->load->view('templates/layouts/footer');
	}
	
}
