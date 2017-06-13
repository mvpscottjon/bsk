<?php

include 'sqlPdo3.php';
$PDO= new PDO($dsn,$username,$passwd,$options);

if(isset($_REQUEST['gstatus'])){
    $gstatus = $_REQUEST['gstatus'];
    $timezone = date_default_timezone_set("Asia/Taipei");
    $createtime = date("Y-m-d H:i:s");

//    echo $createtime;
    $sql = 'INSERT INTO bskgame(gstatus,createtime) VALUES (?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$gstatus,$createtime]);



header('Location:createPlayer.php');
}





