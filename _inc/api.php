<?php
function sendData($url, $params,$token) {
		
$content = json_encode($params);
$request_headers = [
    'Content-type: application/json',
    'Authorization:' . $token
];
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
$request_headers);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

return json_decode($json_response, true);
}
function sendGet($url,$params){
    foreach($params as $k=>$v){
        $param[] = "$k=$v";
    }
    $params = implode("&",$param);
    return json_decode(file_get_contents("$url/?$params"),true);
}
?>