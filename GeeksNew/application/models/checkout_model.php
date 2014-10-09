<?php if (! defined('BASEPATH')) {exit('No direct script access allowed');}

class Checkout_model extends CI_Model {

    public function shipSelect($id) {
        $sql = $this->db->get_where('ship', array('cId' => $id));
        return $sql->result();
    }

    public function close() {
        $this->db->close();
    }

    public function insert($cid, $address, $sid,$f) {
        $pid = $q = $p = "";
        $total = $this->session->userdata('total');
        $orderDate = date('Y-m-d H:i:s');
        $sql2 = $this->db->query("select sAddress from ship where sId = $sid");
        foreach($sql2->result() as $row2) {
            $sAddress = $row2->sAddress;
        }
        if (!$sql2->result()) {
            echo 'select ship failed.';
            $f = 6;
        }
        
        if ($f == 0) {
            $d = array(
                'customerId'=>$cid,
                'orderDate'=>$orderDate,
                'total'=>$total,
                'bAddress'=>$address,
                'sAddress'=>$sAddress
            );
            $sql3 = $this->db->insert('ooder',$d);            
            if (!$sql3) {
                echo 'insert ooder failed.';
                $f = 7;
            }
            $sql4 = $this->db->query("select orderId from ooder where customerId = '$cid' and orderDate = '$orderDate'");
            foreach($sql4->result() as $row4){
                $orderId = $row4->orderId;
            }
            if (!$sql4->result()) {
                echo 'select orderId failed.';
                $f = 8;
            }
            if ($f == 0) {
                $sql5 = $this->db->query("SELECT product.productDisc,product.productId,product.productOriginPrice,cart.quantity from product,cart where product.productId = cart.productId and cart.customerId = $cid");
                foreach($sql5->result() as $row5) {
                    $pid = $row5->productId;
                    $q = $row5->quantity;
                    $p = round($row5->productDisc * $row5->productOriginPrice);
                    $m = array(
                        'productId'=>$pid,
                        'quantity'=>$q,
                        'price'=>$p,
                        'orderId'=>$orderId
                    );
                    $sql1 = $this->db->insert('orderdetail',$m);                    
                    if (!$sql1) {
                        echo 'insert orderdetail failed';
                        $f = 5;
                    }
                }
                if ($f == 0) {
                    $sql6 = $this->db->delete('cart',array('customerId'=>$cid));                    
                    if (!$sql6) {
                        echo 'delete cart failed.';
                    }
                }
            }
        }
        return $f;
    }

}
