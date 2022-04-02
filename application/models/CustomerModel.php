<?php 

defined('BASEPATH') OR exit('No direct script access allowed !');

class CustomerModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function ShowData()
    {
        
        $query = $this->db->query("SELECT * FROM user WHERE role = 2");

        return $query->result_array();
    }

    public function deleteCustomer($id){
        $this->db->query("DELETE FROM user WHERE id = $id");
    }

    public function DetailCustomer($data){
        $query = $this->db->query("SELECT * FROM user WHERE id='".$data['id']."'");
        return $query->result_array();
    }

}
