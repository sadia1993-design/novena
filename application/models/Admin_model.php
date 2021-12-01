<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login_info($data)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['passwd']);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    //SHOW ALL BANNER
    public function banner_info()
    {
        $this->db->select('*')->from('banner');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    //BANNER EDIT QUERY
    public function get_banner_info($id)
    {
        $this->db->select('*')->from('banner')->where('id', $id);
        $query_result = $this->db->get();
        return $result = $query_result->row();
    }

    //BANNER UPDATE QUERY
    public function update_banner_info($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('banner', $data);
        
    }

    //show all counter  
    public function counter_info()
    {
        $this->db->select('*')->from('counter')->order_by('id', 'desc')->limit(4);
        $query = $this->db->get();
        return $result = $query->result();
    }

 
}
