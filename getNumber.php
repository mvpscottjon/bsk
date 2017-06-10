<?php

include 'sqlPdo3.php';
$PDO= new PDO($dsn,$username,$passwd,$options);



    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $number3 = $_REQUEST['number3'];
    $number4 = $_REQUEST['number4'];
    $number5 = $_REQUEST['number5'];
    $number6 = $_REQUEST['number6'];
    $number7 = $_REQUEST['number7'];
    $number8 = $_REQUEST['number8'];
    $number9 = $_REQUEST['number9'];
    $number10 = $_REQUEST['number10'];
    $number11= $_REQUEST['number11'];
    $number12 = $_REQUEST['number12'];
    $sql = 'INSERT INTO playernumber(player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
//$sql2 = 'INSERT INTO playernumber(player1,player2,player3,player4) VALUES (?,?,?,?)';

$stmt = $PDO->prepare($sql);
    $stmt->execute([$number1, $number2,$number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10, $number11, $number12]);




