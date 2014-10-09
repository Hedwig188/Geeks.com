<?php
if (! defined('BASEPATH')) {exit('No direct script access allowed');}
function safe($s){
    if(get_magic_quotes_gpc()){ 
        $s=stripslashes($s);         
    }
    $s=mysql_real_escape_string($s);
    return $s;
}
class Checkout_ctr extends CI_Controller {

    public function shipInfoSelect() {
        $id = $this->session->userdata('Id');
        $this->load->model('checkout_model');
        $data['ship'] = $this->checkout_model->shipSelect($id);
        $this->load->view('shipInfoSelect', $data);
        $this->checkout_model->close();
    }

    public function saveBillPro() {
        date_default_timezone_set('America/Los_Angeles');
        $name = $type = $card = $exp = $address = $city = $state = $zip = $phone = $sid = $sAddress = "";
        $f = 0;
        if ($this->input->post('name')) {
            $name = safe($this->input->post('name'));
        } else {
            $f = 1;
        }
        if ($this->input->post('type')) {
            $type = safe($this->input->post('type'));
        } else {
            $f = 1;
        }
        if ($this->input->post('card')) {
            $card = safe($this->input->post('card'));
        } else {
            $f = 1;
        }
        if ($this->input->post('exp')) {
            $exp = safe($this->input->post('exp'));
        } else {
            $f = 1;
        }
        if ($this->input->post('address')) {
            $address = safe($this->input->post('address'));
        } else {
            $f = 1;
        }
        if ($this->input->post('city')) {
            $city = safe($this->input->post('city'));
        } else {
            $f = 1;
        }
        if ($this->input->post('state')) {
            $state = $this->input->post('state');
        } else {
            $f = 1;
        }
        if ($this->input->post('zip')) {
            $zip = safe($this->input->post('zip'));
        } else {
            $f = 1;
        }
        if ($this->input->post('phone')) {
            $phone = safe($this->input->post('phone'));
        } else {
            $f = 1;
        }
        if ($this->input->post('sid')) {
            $sid = htmlspecialchars($this->input->post('sid'));
        } else {
            $f = 1;
        }

        if (!(filter_var($card, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^\d{16}$/"))))) {
            echo 'invalid card number';
            $f = 2;
        }

        if (!(filter_var($phone, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^(?:\([2-9][0-9]{2}\)\ ?|[2-9][0-9]{2}(?:\-?|\ ?))[2-9][0-9]{2}[- ]?[0-9]{4}$/"))))) {
            echo 'invalid phone number';
            $f = 3;
        }

        if (!(filter_var($zip, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]*$/"))))) {
            echo 'invalid zip code';
            $f = 4;
        }
        if ($f == 1) {
            echo 'error post!';
        }
        $cid = $this->session->userdata('Id');
        if($f == 0){
            $this->load->model('checkout_model');
            $this->session->set_userdata('f',$this->checkout_model->insert($cid,$address,$sid,$f));
            $this->load->view('saveBillPro');
        }
        $this->checkout_model->close();
    }

}
