<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
function safe($s){
    if(get_magic_quotes_gpc()){ 
        $s=stripslashes($s);         
    }
    $s=mysql_real_escape_string($s);
    return $s;
}

class Signinon_ctr extends CI_Controller {
    
    public function signinPro() {
        if ($this->input->post('email')) {
            $email = safe($this->input->post('email'));
        }
        if ($this->input->post('pwd')) {
            $pwd = safe($this->input->post('pwd'));
        }
        $this->load->model('signinon_model');
        $data['d']=$this->signinon_model->signinProc($email, $pwd);
        $this->load->view('temp',$data);        
    }

    public function signonPro() {
        $pwd1 = $pwd2 = $email = "";
        $f = 0;
        if ($this->input->post('email2')) {
            $email = safe($this->input->post('email2'));
            $this->session->set_userdata('email', $email);
        }
        if ($this->input->post('pwd2')) {
            $pwd1 = safe($this->input->post('pwd2'));
        }
        if ($this->input->post('pwd3')) {
            $pwd2 = safe($this->input->post('pwd3'));
        }

        if ($pwd1 != $pwd2) {
            $f = 1;
        }
        $this->load->model('signinon_model');
        $data['d'] = $this->signinon_model->signonProc($pwd1, $email, $f);
        $this->load->view('redirect',$data);
        
    }

}
