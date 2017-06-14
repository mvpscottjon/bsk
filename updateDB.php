<?php
//**********insert X Y
include 'sqlPdo3.php';

session_start();

$PDO= new PDO($dsn,$username,$passwd,$options);

if ($_SESSION['gid']){
   $gid = $_SESSION['gid'];


if (isset($_REQUEST['x'])) {
    $mx = $_REQUEST['x'];
    $my = $_REQUEST['y'];
    $player = $_REQUEST['p'];
    $cx = $_REQUEST['cx'];
    $cy = $_REQUEST['cy'];
    $sx = $_REQUEST['sx'];
    $sy = $_REQUEST['sy'];
    $ox = $_REQUEST['ox'];
    $oy = $_REQUEST['oy'];
    $mm = $_REQUEST['mm'];
//    $sql2 = 'INSERT INTO bsk (playernumber,mx) VALUES (??)';

    $timezone = date_default_timezone_set("Asia/Taipei");
    $createtime = date("Y-m-d H:i:s");

    $sql = 'INSERT INTO bsk (gid,playernumber,getx,gety,clientx,clienty,screenx,screeny,offsetx,offsety,madeormiss,createtime) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$gid,$player,$mx,$my,$cx,$cy,$sx,$sy,$ox,$oy,$mm,$createtime]);

//    echo $mx;


}

}

///update x y
//if(isset($_REQUEST['x'])){
//    $mx = $_REQUEST['x'];
//    $my = $_REQUEST['y'];
//    $player = $_REQUEST['p'];
//    $cx = $_REQUEST['cx'];
//    $cy = $_REQUEST['cy'];
//    $sx = $_REQUEST['sx'];
//    $sy = $_REQUEST['sy'];
//    $ox = $_REQUEST['ox'];
//    $oy = $_REQUEST['oy'];
//    $mm = $_REQUEST['mm'];
//
//    $timezone = date_default_timezone_set("Asia/Taipei");
//    $createtime = date("Y-m-d H:i:s");
//
//
//    $sql = 'INSERT INTO bsk (gid,playernumber,getx,gety,clientx,clienty,screenx,screeny,offsetx,offsety,madeormiss,createtime) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
//    $stmt = $PDO->prepare($sql);
//    $stmt->execute([$gid,$player,$mx,$my,$cx,$cy,$sx,$sy,$ox,$oy,$mm,$createtime]);
//
//
//
//
//
//}


?>