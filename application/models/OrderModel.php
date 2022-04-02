<?php 

defined('BASEPATH') OR exit('No direct script access allowed !');

class OrderModel extends CI_Model{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function ShowData()
    {
        
        $query = $this->db->query("SELECT o.id_order, u.nama, b.nama_barang, o.jmlpesan, o.lamasewa, o.status FROM orderan o inner join barang b on o.id_barang = b.id_barang inner join user u on o.id_user = u.id");

        return $query->result_array();
    }

    public function DeleteOrder($id){
        $this->db->query("DELETE FROM orderan WHERE id_order = $id");
    }

    public function ShowDetail($id){
        $query = $this->db->query("SELECT o.id_order, o.id_barang, u.nama, b.nama_barang, o.jmlpesan, o.lamasewa, o.status FROM orderan o inner join barang b on o.id_barang = b.id_barang inner join user u on o.id_user = u.id WHERE o.id_order='".$id."'");
        return $query->result_array();
    }

    public function EditOrder($id, $status, $id_barang){
        if($status == "Selesai"){
            $this->db->query("UPDATE barang set stock = (stock+1) WHERE id_barang = '$id_barang'");
            $this->db->query("UPDATE orderan SET status ='$status' WHERE id_order = '$id'");
        }else{
            $this->db->query("UPDATE orderan SET status ='$status' WHERE id_order = '$id'");
        }
    }

    public function cartData($id_barang,$lamasewa,$data){
        $id_user = $data['id'];
        $this->db->query("INSERT INTO cart(id_user,id_barang,lamasewa) values('$id_user','$id_barang','$lamasewa')");

        $query = $this->db->query("SELECT c.id_cart, u.id, u.nama, b.nama_barang,(b.harga*c.lamasewa) as total, b.harga, b.deskripsi, b.gambar, c.lamasewa FROM cart c inner join barang b on c.id_barang = b.id_barang inner join user u on c.id_user = u.id where c.id_user = $id_user");
        return $query->result_array();
    }

    public function cartShow($data){
        $id_user = $data['id'];
        $query = $this->db->query("SELECT c.id_cart, u.id, u.nama, b.nama_barang,(b.harga*c.lamasewa) as total, b.deskripsi, b.gambar, c.lamasewa FROM cart c inner join barang b on c.id_barang = b.id_barang inner join user u on c.id_user = u.id where c.id_user = $id_user");
        return $query->result_array();
    }

    public function cartLama($data){
        $id_user = $data['id'];
        $query = $this->db->query("SELECT lamasewa from cart where id_user = $id_user");
        return $query->result_array();
    }

    public function check($data,$id_barang){
        $id_user = $data['id'];
        $query = $this->db->query("SELECT * from cart where id_user = $id_user and id_barang = $id_barang");
        return $query->result_array();
    }
    public function DeleteCart($id){
        $this->db->query("DELETE FROM cart WHERE id_cart = $id");
    }
    public function cartOrder($data){
        $id_user = $data['id'];
        $query = $this->db->query("SELECT * from cart where id_user = $id_user");
        return $query->result_array();
    }

    public function addOrder($data){
        $id_user = $data['id_user'];
        $id_barang = $data['id_barang'];
        $lamasewa = $data['lamasewa'];
    
        $this->db->query("UPDATE barang SET stock = (stock-1) where id_barang = '$id_barang'");

        $this->db->query("INSERT INTO orderan(id_user,id_barang,jmlpesan,lamasewa,status) values('$id_user','$id_barang','1','$lamasewa','Sedang Dikirim')");
    }

    public function kosongCart($data){
        $id_cart = $data['id_cart'];

        $this->db->query("DELETE FROM cart WHERE id_cart = $id_cart");
    }

    public function ShowOrderUser($data)
    {
        $id_user = $data['id'];
        $query = $this->db->query("SELECT o.id_order, u.nama, b.nama_barang, o.jmlpesan, o.lamasewa, o.status FROM orderan o inner join barang b on o.id_barang = b.id_barang inner join user u on o.id_user = u.id where o.id_user = $id_user");

        return $query->result_array();
    }

    public function ChangeOrderStatus($id_order,$status){
        $query = $this->db->query("UPDATE orderan set status = '$status' where id_order = '$id_order' ");
    }
}

