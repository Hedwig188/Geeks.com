<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function cartProc($id) {
        $cid = $this->session->userdata('Id');
        $sql = $this->db->query("select quantity from cart where customerId = '$cid' and productId = '$id'");
        if ($sql->num_rows() == 0) {
            return "";
        } else {
            return $sql->result();
        }
    }

    public function insertCart($id) {
        $d = array(
            'productId' => $id,
            'quantity' => 1,
            'customerId' => $this->session->userdata('Id')
        );
        $this->db->insert('cart', $d);
    }

    public function updataCart($qua, $id) {
        $cid = $this->session->userdata('Id');
        foreach ($qua as $row1) {
            $quantity1 = $row1->quantity + 1;            
            $this->db->query("update cart set quantity = '$quantity1' where productId = '$id' and customerId = '$cid'");
        }
    }

    public function tmpPro($id) {
        $sql = $this->db->get_where('tmp', array('productId' => $id));
        if ($sql->num_rows() == 0) {
            return "";
        } else {
            return $sql->result();
        }
    }

    public function updateTmp($qua, $id) {
        foreach ($qua as $row1) {
            $quantity1 = $row1->quantity + 1;
            $d = array(
                'quantity' => $quantity1
            );
            $this->db->where('productId', $id);
            $this->db->update('tmp', $d);
        }
    }

    public function insertTmp($qua, $id) {
        $d = array(
            'productId' => $id,
            'quantity' => 1
        );
        $this->db->insert('tmp', $d);
    }

    public function close() {
        $this->db->close();
    }

    public function getProduct($cid) {
        $sql = $this->db->query("SELECT product.productDisc,product.productId,product.productImg,product.productName,product.productOriginPrice,cart.quantity,cart.customerId,cart.catId from product,cart where product.productId = cart.productId and cart.customerId = '$cid'");
        return $sql->result();
    }

    public function getProdT() {
        $sql = $this->db->query("SELECT product.productDisc,product.productId,product.productImg,product.productName,product.productOriginPrice,tmp.quantity,tmp.tmpId from product,tmp where product.productId = tmp.productId");
        return $sql->result();
    }

    public function getCId() {
        $sql = $this->db->query("select pr.productName,pr.productImg,pr.productOriginPrice,pr.productDisc,pr.productId from product pr where pr.productId in (select distinct productId from orderdetail where orderId in (select orderId from orderdetail where productId in (select productId from cart)) and productId not in (select productId from cart))");
        return $sql->result();
    }

    public function getTId() {
        $sql = $this->db->query("select pr.productName,pr.productImg,pr.productOriginPrice,pr.productDisc,pr.productId from product pr where pr.productId in (select distinct productId from orderdetail where orderId in (select orderId from orderdetail where productId in (select productId from tmp)) and productId not in (select productId from tmp))");
        return $sql->result();
    }

    public function delete($id) {
        if ($this->session->userdata('Id')) {
            $sql = $this->db->delete('cart', array('catId' => $id));
            if (!$sql) {
                echo 'delete cart error!';
            }
        } else {
            $sql = $this->db->delete('tmp', array('tmpId' => $id));
            if (!$sql) {
                echo 'delete tmp error!';
            }
        }
    }

    public function totalPro($cid) {
        $sql = $this->db->query("SELECT product.productDisc,product.productId,product.productOriginPrice,cart.catId from product,cart where product.productId = cart.productId and cart.customerId = '$cid'");
        return $sql->result();
    }

    public function totalProT() {
        $sql = $this->db->query("SELECT product.productDisc,product.productId,product.productOriginPrice,tmp.tmpId from product,tmp where product.productId = tmp.productId");
        return $sql->result();
    }

    public function tPro($tt, $tot) {
        $t = 0;
        $i = 0;
        foreach ($tot as $row) {
            if ((!is_numeric($tt[$i])) || $tt[$i] < 0) {
                $tt[$i] = 0;
            }
            $t+=$tt[$i] * round($row->productDisc * $row->productOriginPrice);
            $c = $row->productId;
            if ($this->session->userdata('Id')) {
                $d = array('quantity' => $tt[$i]);
                $this->db->where('productId', $c);
                $sql = $this->db->update('cart', $d);
                if (!$sql) {
                    echo 'update cart error.';
                }
            } else {
                $d = array('quantity' => $tt[$i]);
                $this->db->where('productId', $c);
                $sql = $this->db->update('tmp', $d);
                if (!$sql) {
                    echo 'update tmp error.';
                }
            }
            $i++;
        }
        return $t;
    }
    
    public function cleanup($id){
        $this->db->delete('cart',array('customerId'=>$id));
    }
    
    public function cleanupT(){
        $this->db->empty_table('tmp');
    }

}
