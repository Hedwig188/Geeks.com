<?php if (! defined('BASEPATH')) {exit('No direct script access allowed');}
function safe($s){
    if(get_magic_quotes_gpc()){ 
        $s=stripslashes($s);         
    }
    $s=mysql_real_escape_string($s);
    return $s;
}
class Account_ctr extends CI_Controller{
    public function shipInfo(){
        $id = $this->session->userdata('Id');
        $this->load->model('account_model');
        $data['ship'] = $this->account_model->showShipInfo($id);
        $this->load->view('ShipInfo',$data);
    }
    
    public function editShipInfo(){
        if($this->input->post('id')){
            $id = $this->input->post('id');
        }
        $this->session->set_userdata('editId',$id);
        $this->load->model('account_model');
        $data['editShip'] = $this->account_model->editShipInfo($id);
        $this->load->view('editShipInfo',$data);
    }
    
    public function editShipPro(){
        $this->load->model('account_model');
        $this->account_model->editShipInfoPro();
    }
    
    public function deleteShipInfo(){
        if($this->input->post('id')){
            $id = $this->input->post('id');
        }
        $this->load->model('account_model');
        $this->account_model->deleteShipInfoPro($id);
    }
    
    public function addShip(){
        $this->load->view('addShipInfo');
    }
    
    public function addshipInfoPro(){
        $id = $this->session->userdata('Id');
        $this->load->model('account_model');
        $this->account_model->addShipPro($id);
    }
    
    public function basicInfo(){
        $id = $this->session->userdata('Id');
        $this->load->model('account_model');
        $data['basic']=$this->account_model->showBasic($id);
        $this->load->view('BasicInfo',$data);
    }
    
    public function sendBasic(){
        $id = $this->session->userdata('Id');
        $name = $email = $pwd = "";        
        if ($this->input->post('newName') != "") {
            $name = safe($this->input->post('newName'));            
        } else {
            $name = $this->input->post('curName');            
        }
        if ($this->input->post('newEmail') != "") {
            $email = safe($this->input->post('newEmail'));            
        } else {
            $email = $this->input->post('curEmail');            
        }
        if ($this->input->post('newPwd') != "") {
            $pwd = safe($this->input->post('newPwd'));            
        } else {
            $pwd = "";            
        }
        $this->load->model('account_model');
        $this->account_model->sendBasicPro($name,$email,$pwd,$id);
    }
    
    public function orderHistory(){
        $id = $this->session->userdata('Id');
        $this->load->model('account_model');
        $data['oh']=$this->account_model->orderHistoryPro($id);
        $this->load->view('orderHistory',$data);
    }
    
    public function showOrderDetail(){
        if($this->input->post('oid')){
            $orderId = $this->input->post('oid');
        }
        $this->load->model('account_model');
        $data['od']=$this->account_model->orderDetail($orderId);
        $data['odp']=$this->account_model->orderDetailP($orderId);        
        $this->load->view('showOrderDetail',$data);
        
    }
}