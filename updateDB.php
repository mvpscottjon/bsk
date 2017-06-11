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
    $mm = $_REQUEST['mm'];
//    $sql2 = 'INSERT INTO bsk (playernumber,mx) VALUES (??)';


    $sql = 'INSERT INTO bsk (playernumber,getx,gety,clientx,clienty,screenx,screeny,offsetx,offsety,madeormiss) VALUES (?,?,?,?,?,?,?,?,?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$player,$mx,$my,$cx,$cy,$sx,$sy,$ox,$oy,$mm]);

//    echo $mx;


}


?>