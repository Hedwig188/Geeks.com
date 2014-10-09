<?php
if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}
class Signinon_model extends CI_Model {

    public function signinProc($email, $pwd) {
        $f = 0;
        $sql = $this->db->query("select cId,cName from customer where cEmail = '$email' and cPwd= password('$pwd')");
        if ($sql->num_rows() == 1) {
            foreach ($sql->result() as $row) {
                $id = $row->cId;
                $newdata = array(
                    'Id' => $row->cId,
                    'name' => $row->cName
                );
                $this->session->set_userdata($newdata);
            }
            $this->session->set_userdata('email', $email);
        }
        if ($this->session->userdata('Id')) {
            if ($this->session->userdata('tmp')) {
                $sql1=$this->db->get('tmp');
                $res1 = $sql1->result();
                foreach ($res1 as $row1) {
                    $p_id = $row1->productId;
                    $q_t = $row1->quantity;
                    $y = 1;
                    $sql5 = $this->db->query("select quantity from cart where productId = '$p_id'");
                    $res5 = $sql5->result();
                    foreach ($res5 as $row5) {
                        $quantity1 = $row5->quantity + $q_t;
                        $data = array(
                            'quantity' => $quantity1,
                        );
                        $this->db->where('productId', $p_id);
                        $this->db->update('cart', $data);
                        $y = 2;
                    }
                    if ($y == 1) {
                        $data = array(
                            'productId' => $p_id,
                            'quantity' => $q_t,
                            'customerId' => $id
                        );
                        $sql2 = $this->db->insert('cart', $data);
                    }
                    if (!$sql2) {
                        echo 'insert cart from tmp failed.';
                    }
                    $sql3 = $this->db->empty_table('tmp');
                    $this->session->unset_userdata('tmp');
                }
                $f = 1;
                return $f;
            } else {
                $f = 2;
                return $f;
            }
        } else {
            $f = 3;
            return $f;
        }
        
    }

    public function signonProc($pwd1, $email, $f) {
        if ($f != 1) {
            $sql1 = $this->db->query("select cId from customer where cEmail='$email'");
            foreach ($sql1->result() as $row) {
                if ($row->cId) {                    
                    $f = 2;
                    return $f;
                }
            }
        }
        if ($f == 0) {
            $this->db->query("insert into customer(cEmail,cPwd) values('$email',password('$pwd1'))");
            $sql2 = $this->db->query("select cId,cName from customer where cEmail='$email'");
            foreach ($sql2->result() as $row2) {
                $id = $row2->cId;
                $newdata = array(
                    'Id' => $row2->cId,
                    'name' => $row2->cName
                );
                $this->session->set_userdata($newdata);
            }
        }
        if ($this->session->userdata('tmp')) {
            $res = $this->db->get('tmp');
            foreach ($res as $row1) {
                $p_id = $row1->productId;
                $q_t = $row1->quantity;
                $y = 1;
                $sql5 = $this->db->query("select quantity from cart where productId = '$p_id'");
                foreach ($sql5->result() as $row5) {
                    $quantity1 = $row5->quantity + $q_t;
                    $data = array(
                        'quantity' => $quantity1
                    );
                    $this->db->where('productId', $p_id);
                    $this->db->update('cart', $data);
                    $y = 2;
                }
                if ($y == 1) {
                    $data = array(
                        'productId' => $p_id,
                        'quantity' => $q_t,
                        'customerId' => $id
                    );
                    $sql2 = $this->db->insert('cart', $data);
                }
                if (!$sql2) {
                    echo 'insert cart from tmp failed.';
                }
                $this->db->delete('tmp');
                $this->session->unset_userdata('tmp');
            }
            $f = 3;
            return $f;
        } else {
            $f = 4;
            return $f;            
        }
    }

}
