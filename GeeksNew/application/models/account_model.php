<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

    public function showShipInfo($id) {
        $sql = $this->db->get_where('ship', array('cId' => $id));
        return $sql->result();
    }

    public function editShipInfo($id) {
        $sql = $this->db->get_where('ship', array('sId' => $id));
        return $sql->result();
    }

    public function editShipInfoPro() {
        $name = $address = $city = $state = $zip = $phone = "";
        $id = $this->session->userdata('editId');
        if ($_POST['name']) {
            $name = htmlspecialchars($_POST['name']);
        }
        if ($_POST['address']) {
            $address = htmlspecialchars($_POST['address']);
        }
        if ($_POST['city']) {
            $city = htmlspecialchars($_POST['city']);
        }
        if ($_POST['state']) {
            $state = htmlspecialchars($_POST['state']);
        }
        if ($_POST['zip']) {
            $zip = htmlspecialchars($_POST['zip']);
        }
        if ($_POST['phone']) {
            $phone = htmlspecialchars($_POST['phone']);
        }
        if ($_POST) {
            $d = array(
                'sName' => $name,
                'sAddress' => $address,
                'sCity' => $city,
                'sState' => $state,
                'sZip' => $zip,
                'sPhone' => $phone
            );
            $this->db->where('sId', $id);
            $sql = $this->db->update('ship', $d);
        }
        if (!$sql) {
            echo 'mysql_error';
        }
        $this->db->close();
    }

    public function deleteShipInfoPro($id) {
        $this->db->delete('ship', array('sId' => $id));
    }

    public function addShipPro($id) {
        $name = $address = $city = $state = $zip = $phone = "";
        if ($_POST['name']) {
            $name = htmlspecialchars($_POST['name']);
        }
        if ($_POST['address']) {
            $address = htmlspecialchars($_POST['address']);
        }
        if ($_POST['city']) {
            $city = htmlspecialchars($_POST['city']);
        }
        if ($_POST['state']) {
            $state = htmlspecialchars($_POST['state']);
        }
        if ($_POST['zip']) {
            $zip = htmlspecialchars($_POST['zip']);
        }
        if ($_POST['phone']) {
            $phone = htmlspecialchars($_POST['phone']);
        }
        if ($_POST) {
            $data = array(
                'sName' => $name,
                'sAddress' => $address,
                'sCity' => $city,
                'sState' => $state,
                'sZip' => $zip,
                'sPhone' => $phone,
                'cId' => $id
            );
            $sql = $this->db->insert('ship', $data);
        }
        if (!$sql) {
            echo 'mysql_error';
        }
        $this->db->close();
    }

    public function showBasic($id) {
        $query = $this->db->get_where('customer', array('cId' => $id));
        return $query->result();
    }

    public function sendBasicPro($name,$email,$pwd,$id) {  
        if ($pwd == "") {
            $data=array(
                'cEmail'=>$email,
                'cName'=>$name,
            );
            $this->db->where('cId',$id);
            $sql=$this->db->update('customer',$data);
        } else {            
            $sql = "update customer set cEmail='$email',cName='$name',cPwd = password('$pwd') where cId='$id'";
        }
        if ($sql) {
            echo 'update basic information success.';
        } else {
            echo 'update basic information error.';            
        }
        $this->db->close();
    }
    
    public function orderHistoryPro($id){        
        $sql = $this->db->get_where('ooder',array('customerId'=>$id));
        return $sql->result();
    }
    
    public function orderDetail($id){
        $sql = $this->db->get_where('ooder',array('orderId'=>$id));
        return $sql->result();
    }
    
    public function orderDetailP($id){        
        $sql = $this->db->query("select product.productDisc,product.productId,product.productImg,product.productName,product.productOriginPrice,orderdetail.quantity from product,orderdetail where product.productId = orderdetail.productId and orderdetail.orderId = $id");
        return $sql->result();
    }

}
