<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Main_model extends CI_Model {

    public function getCategory() {        
        $sql = $this->db->get('productcategory');
        return $sql->result();
    }

    public function getProducts() {
        $sql = $this->db->query("select * from product order by productCategoryId ASC");        
        return $sql->result();
    }

    public function cartProc() {
        $this->load->model('cartPro');
    }

    public function logoutPro() {
        if ($this->session->userdata('Id')) {
            $this->session->unset_userdata('Id');
        }
        if ($this->session->userdata('email')) {
            $this->session->unset_userdata('email');
        }
        if ($this->session->userdata('name')) {
            $this->session->unset_userdata('name');
        }
    }

    public function showSale() {
        $sql = $this->db->query("SELECT * from product,sale where product.productId = sale.productId;");
        return $sql->result();
    }

    public function showDetail() {
        $id = $this->session->userdata['prodId'];
        $sql=$this->db->get_where('product',array('productId'=>$id));
        return $sql->result();
    }

    public function showCategoryName($id) {
        $sql = $this->db->query("select categoryName from productcategory where categoryId='$id'");
        return $sql->result();
    }

    public function showCatDetail($id) {
        $sql= $this->db->get_where('product',array('productCategoryId'=>$id));
        return $sql->result();
    }

    public function showCatSale($id) {
        $sql = $this->db->query("SELECT * from product,sale where product.productId = sale.productId and product.productCategoryId = '$id'");
        return $sql->result();
    }

}
