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
if(isset($_GET['do']) && array_key_exists($_GET['do'],$modules[$page])){
    $do = $_GET['do'];
};
require $dir."template/dashboard/head.php";
require $dir."pages/$page/$do.php";
require $dir."template/dashboard/footer.php";

?>