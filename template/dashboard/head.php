<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tibnet - Client</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="head">
        <a href="/" class="logo">
            <img src="assets/img/logo.png" alt="">
            
        </a>
        <div class="user">
            <a href="" class="notify"><?php
            if($notify>0){
                echo "<span>$notify</span>";
            }
            ?><i data-lucide="bell"></i></a>
            <div class="name">
                <p><?=$h_name;?></p>
                <span><?=$h_name_bot;?></span>
            </div>
            <div class="icon">
                <span><?=$ic;?></span>
            </div>
            <a href="/?logout" class="logout"><i data-lucide="log-out"></i></a>
        </div>
        
        
    </div>
    <main>
        <div class="sidebar">
            <ul class="menu">
            <?
            foreach($modules[$page] as $p=>$v){
                $act = "";
                if($do == $p){
                    $act = "active";
                }
                echo "<li class=\"$act\"><a href=\"/?do=$p\"><i data-lucide=\"{$v['icon']}\"></i> <span>{$v['name']}</span></a></li>";
            }
            
            ?>
            
                
        </ul>
        </div>
        <div class="content">
            <div class="bg"></div>