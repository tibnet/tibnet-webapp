<?
require "_inc/api.php";
$url = "https://tibnet.faveo.uz/api/v1";
if(isset($_POST['checkPhone'])){
    $data['phone'] = $_POST['checkPhone'];
    $res = sendGet("$url/auth/checkPhone",$data);
    if($res['allowLogin']){
        echo "ok";
    } else {
        echo "reg";
    }
}
?>