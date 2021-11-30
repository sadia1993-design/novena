<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //login default page
    public function index()
    {
        
        $this->load->view('admin/index');
    }

    //login function
    public function login()
    {
        $username = $this->input->post('email', true);
        $passwd = $this->input->post('passwd', true);

        $data= array(
            'email' => $username,
            'passwd' => $passwd
        );

        $this->load->model('Admin_model');
        $login_data = $this->Admin_model->login_info($data);
        
        if($login_data){
            redirect('Admin/dashboard');
        }
        else{
           echo "Invalid username or password";
        }
    }

    //dashboard default page
    public function dashboard()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }


    //logout function
    public function logout()
    {
        echo "logout";
    }
}