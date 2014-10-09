<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Main extends CI_Controller {

    public function index() {                  
        $this->frontpage();        
    }

    public function frontpage() {
        $this->load->model('main_model');
        $data['cat'] = $this->main_model->getCategory();
        $data['products'] = $this->main_model->getProducts();
        $this->load->view('Geeks', $data);
    }

    public function myaccount() {
        if ($this->session->userdata('time')) {
            $this->timeout();
            $this->load->view('myAccount');
        } else {
            $this->signinon();
        }
    }

    public function signinon() {
        $this->load->view('Signinon');
    }

    public function cartPro() {
        $this->load->model('main_model');
        $this->main_model->cartProc();
    }

    public function cart() {
        $this->load->model('cart_model');
        if ($this->session->userdata('Id')) {
            $cid = $this->session->userdata('Id');
            $this->timeout();
            $data['cProd'] = $this->cart_model->getProduct($cid);
            $data['like'] = $this->cart_model->getCId();
        } else {
            $data['tProd'] = $this->cart_model->getProdT();
            $data['like'] = $this->cart_model->getTId();
        }
        $this->load->view('cart', $data);
        $this->cart_model->close();
    }

    public function logout() {
        $this->load->model('main_model');
        $this->main_model->logoutPro();
    }

    public function sale() {
        $this->load->model('main_model');
        $data['sale'] = $this->main_model->showSale();
        $this->load->view('sale', $data);
    }

    public function getProdDetail() {
        if ($this->input->post('prodId')) {
            $this->session->set_userdata('prodId', $this->input->post('prodId'));
        }
    }

    public function getDetailPage() {
        $this->load->model('main_model');
        $data['detail'] = $this->main_model->showDetail();
        $this->load->view('prodDetail', $data);
    }

    public function categoryP() {
        if ($this->input->post('catId')) {
            $catId = $this->input->post('catId');
            $this->session->set_userdata('catId', $catId);
        }
    }

    public function category() {
        $catId = $this->session->userdata('catId');
        $this->load->model('main_model');
        $data['catName'] = $this->main_model->showCategoryName($catId);
        $data['catDetail'] = $this->main_model->showCatDetail($catId);
        $data['catSale'] = $this->main_model->showCatSale($catId);
        $this->load->view('category', $data);
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
            echo '<script type="text/javascript">
                   alert("Login Timeout!");            
                   location.href="http://cs-server.usc.edu:50468/GeeksNew/index.php/main/signinon";
                 </script>';
        } else {
            $this->session->set_userdata('time', time());
        }
    }

}
