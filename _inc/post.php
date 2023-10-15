<?php
$url = "https://tibnet.faveo.uz/api/v1";
if(isset($_GET['logout'])){
    unset($_SESSION['sign']);
    header("Location: /");
}
if(isset($_POST['sign'])){
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    if($_POST['sign']=="up"){
        $type = $_POST['type'];
      if($type=="pacient"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $data = [
          'phone'=> $phone,
          'password'=> $password,
          'type'=> $type,
          "pacinet" => [
              'firstName'=> $first_name,
              'lastName'=> $last_name
          ]
        ];
      }
      echo json_encode($data);
      $res = sendData("$url/auth/register",$data,"");
      if($res['success']){
        $page = "verify";
        $verificationId = $res['verificationId'];
      } else {
        $mess = [
            "type" => "error",
            "text" => "Xatolik!"
        ];
      }

    }
    if($_POST['sign']=="in"){
        $data = [
            'phone'=> $phone,
            'password'=> $password,
          ];
        

          $res = sendData("$url/auth/login",$data,"");

          if($res['success']){
            $_SESSION['sign'] = $res;
        } else {
          $mess = [
              "type" => "error",
              "text" => $res['message']
          ];
        }
    }
}
if(isset($_POST['verificationId'])){
    $data['vid'] = $_POST['verificationId'];
    $data['code'] = $_POST['verify'];
    $res = sendGet("$url/auth/verify",$data);
    if($res['success']){
        $_SESSION['sign'] = $res;
    } else {
        $mess = [
            "type" => "error",
            "text" => "Xatolik!"
        ];
    }
}
?>