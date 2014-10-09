<?php
if($this->session->userdata('f')==0){
    echo '<div style="margin-left:10px;font-size:16px;">Thank you for your purchase.</div>';
}else{
    echo '<div style="margin-left:10px;font-size:16px;">complete order error.</div>';
}
            


    