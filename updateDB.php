<?php
//**********insert X Y
include 'sqlPdo3.php';
$PDO= new PDO($dsn,$username,$passwd,$options);


if(isset($_REQUEST['x'])){
    $mx = $_REQUEST['x'];
    $my = $_REQUEST['y'];
    $player = $_REQUEST['p'];
    $cx = $_REQUEST['cx'];
    $cy = $_REQUEST['cy'];
    $sx = $_REQUEST['sx'];
    $sy = $_REQUEST['sy'];
    $ox = $_REQUEST['ox'];
    $oy = $_REQUEST['oy'];




    $sql = 'INSERT INTO bsk (player,getx,gety,clientx,clienty,screenx,screeny,offsetx,offsety) VALUES (?,?,?,?,?,?,?,?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$player,$mx,$my,$cx,$cy,$sx,$sy,$ox,$oy]);

//    echo $mx;


}
?>