<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_ctr extends CI_Controller {

    public function cartPro() {
        if (isset($_POST['pId'])) {
            $id = $_POST['pId'];
        }
        $this->load->model('cart_model');
        if ($this->session->userdata('Id')) {
            $data['qua'] = $this->cart_model->cartProc($id);
            if ($data['qua'] != "") {
                $this->cart_model->updataCart($data['qua'], $id);
            } else {
                $this->cart_model->insertCart($id);
            }
        } else {
            $data['tmp_qua'] = $this->cart_model->tmpPro($id);
            if ($data['tmp_qua'] != "") {
                $this->cart_model->updateTmp($data['tmp_qua'], $id);
            } else {
                $this->cart_model->insertTmp($data['tmp_qua'], $id);
            }
        }
        $this->cart_model->close();
    }

    public function deletecartPro() {
        if (isset($_POST['caId'])) {
            $id = $_POST['caId'];
        }
        $this->load->model('cart_model');
        $this->cart_model->delete($id);
        $this->cart_model->close();
    }

    public function updatecart() {
        if (isset($_POST['q']) && isset($_POST['d']) && isset($_POST['o'])) {
            $data['q'] = $_POST['q'];
            $data['d'] = $_POST['d'];
            $data['o'] = $_POST['o'];            
            $this->load->view('updatecartPro',$data);
        }
    }
    
    public function totalPro(){
        if ($this->session->userdata('Id')) {
            $cid = $this->session->userdata('Id');            
            $this->load->model('cart_model');
            $data['tot']=$this->cart_model->totalPro($cid);         
        }else{
            $this->load->model('cart_model');
            $data['tot']=$this->cart_model->totalProT();
        }
        if (isset($_POST['to'])) {
                $tt = $_POST['to'];
                $this->load->model('cart_model');
                $data['t'] = $this->cart_model->tPro($tt,$data['tot']);
                $this->load->view('totalPro',$data);
        }
        $this->cart_model->close();        
    }
    
    public function timeout() {
        $timeout = 600;
        $now = time();
        if (($now - $this->session->userdata('time')) > $timeout) {
            if ($this->session->userdata('Id')) {
                $this->session->unset_userdata('Id');
            }
            if ($this->session->userdata('email')) {
                $this->session->unset_userdata('email');
            }
            if ($this->session->userdata('name')) {
                $this->session->unset_userdata('name');
            }
            echo '<script type="text/javascript">window.alert("Login Timeout!")</script>';
            echo "<script type='text/javascript'>";
            echo 'location.href="http://cs-server.usc.edu:50468/GeeksNew/index.php/main/signinon"';
            echo '</script>';            
        } else {
            $this->session->set_userdata('time',time());            
        }
    }    
    
    public function checkout(){
        if($this->session->userdata('time')){
            $this->timeout();
            $this->load->view('checkout');            
        }
    }
    
    
    public function cleanup(){
        if($this->session->userdata('Id')){
            $id = $this->session->userdata('Id');
            $this->load->model('cart_model');
            $this->cart_model->cleanup($id);
        }else{
            $this->load->model('cart_model');
            $this->cart_model->cleanupT();
        }
    }
    
    
}