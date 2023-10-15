<?
$modules['pacient'] = [
    "orders" => [
        "name" => "Ko'riklar","icon"=>"copy"
    ],
    "search" => [
        "name" => "Izlash","icon"=>"search"
    ],
    "settings" => [
        "name"=>"Sozlamalar", "icon" => "settings"
    ]
];
$notify = 0;
if(isset($_GET['do']) && array_key_exists($_GET['do'],$modules[$page])){
    $do = $_GET['do'];
};
if($page == "company"){
    $h_name = "{$user[$page]['name']}";
    $h_name_bot = "Tashkilot";
    $ic = mb_substr($user[$page]['name'],0,1,'UTF-8');
}else{
    $h_name = "{$user[$page]['lastName']}";
    $h_name_bot = "{$user[$page]['firstName']}";
    $ic = mb_substr($user[$page]['lastName'],0,1,'UTF-8').mb_substr($user[$page]['firstName'],0,1,'UTF-8');
}
require $dir."template/dashboard/head.php";
require $dir."pages/$page/$do.php";
require $dir."template/dashboard/footer.php";

?>