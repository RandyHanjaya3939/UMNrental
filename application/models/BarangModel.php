<?php 

defined('BASEPATH') OR exit('No direct script access allowed !');

class BarangModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function ShowData()
    {
        
        $query = $this->db->query("SELECT * FROM barang");

        return $query->result_array();
    }

    public function deleteBarang($id){
        $this->db->query("DELETE FROM barang WHERE id_barang = $id");
    }

    public function ShowDetail($param){
        $query = $this->db->query("SELECT * FROM barang WHERE id_barang='".$param."'");
        return $query->result_array();
    }

    public function addBarang($nama,$harga,$deskripsi,$stock,$gambar){
        $gambar = 'assets/barang/'.$gambar;
        $this->db->query("INSERT INTO barang(nama_barang,harga,deskripsi,stock,gambar) values('$nama','$harga','$deskripsi','$stock','$gambar')");
    }

    public function editBarang($id,$nama,$harga,$deskripsi,$stock,$gambar){
        $gambar = 'assets/barang/'.$gambar; 
        $this->db->query("UPDATE barang SET nama_barang = '$nama', harga = '$harga', deskripsi = '$deskripsi', stock = '$stock', gambar = '$gambar' WHERE id_barang = $id");
    }

    public function searchBarang($kata){
        $query = $this->db->query("SELECT * FROM barang WHERE nama_barang LIKE '%$kata%'");
        return $query->result_array();
    }
}
