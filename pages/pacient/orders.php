<?php
$url = $url."/pacient/orders";
$data = sendGet($url,[],$user['token']);
if(isset($data['orders']) && count($data['orders'])>0){
     
}else {
    echo "<div class='alert error' >
        <p>Sizda ko'rik uchun arizalar mavjud emas</p>
    </div>";
}
?>