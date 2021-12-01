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

    public function banner_info()
    {
        $this->db->select('*')->from('banner');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

 
}
