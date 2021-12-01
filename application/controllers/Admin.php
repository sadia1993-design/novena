<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //login default page
    public function index()
    {
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id){
            redirect('admin/dashboard');
        }
        else{
            $this->load->view('admin/index');
        }
        
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
        
        $session_info= array();

        if($login_data){
            $session_info['admin_id'] = $login_data->id;
            $session_info['username'] = $login_data->username;
            $this->session->set_userdata($session_info);
            redirect('dashboard');
        }
        else{
            $session_info['msg'] = "Invalid username or password";
            $session_info['msgColor'] = "red_color";
            $this->session->set_userdata($session_info);
            redirect('Admin');
        }
    }

    //dashboard default page
    public function dashboard()
    {
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id){
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/footer');
        }
        else{
            redirect('Admin');
        }
       
    }


    //logout function
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('username');
        $session_info['msg'] = "You have successfully logged out";
        $session_info['msgColor'] = "green_color";
        $this->session->set_userdata($session_info);
        redirect('Admin');
    }


    //banner show function
    public function banner()
    {
        $data['banner_info'] = $this->Admin_model->banner_info();
        if($this->session->userdata('admin_id')){
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/banner/banner_show', $data);
            $this->load->view('admin/footer');
        }
        else{
            redirect('Admin');
        }
    }

    //edit banner 
    public function edit_banner($id)
    {
        $data['banner_edit'] = $this->Admin_model->get_banner_info($id);
        if ($this->session->userdata('admin_id')) {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/banner/banner_edit',$data);
            $this->load->view('admin/footer');
        } 
        else {
            redirect('Admin');
        }
    }

    //update banner
    public function update_banner($id)
    {
        $data = $this->input->post();
        $update_info = $this->Admin_model->update_banner_info($data, $id);
        redirect('Admin/banner');
    }
   
    
}