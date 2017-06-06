<?php
//**********insert X Y
include 'sqlPdo3.php';
$PDO= new PDO($dsn,$username,$passwd,$options);


if(isset($_REQUEST['x'])){
    $mx = $_REQUEST['x'];
    $my = $_REQUEST['y'];
    $player = $_REQUEST['p'];


    $sql = 'INSERT INTO bsk (player,winx,winy) VALUES (?,?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$player,$mx,$my]);

    echo $mx;


}
?>