<?php
if($this->session->userdata('f')==0){
    echo '<div style="margin-left:70px;font-size:20px;">Thank you for your purchase.</div>';
}else{
    echo '<div style="margin-left:70px;font-size:20px;">complete order error.</div>';
}
            


    