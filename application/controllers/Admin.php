<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //login default page
    public function index()
    {
        $this->load->view('admin/index');
    }
}