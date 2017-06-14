<?php

include 'sqlPdo3.php';
session_start();
$PDO= new PDO($dsn,$username,$passwd,$options);



//   echo $number[0].....[12];

//foreach ($number as $key => $value){
//
//   echo "$key : $value<br>";
//}
//echo "-------";

//echo $test;

//$a = "1";
//$b = "2";
//
//for ( $i = 0; $i<12; $i++){

//    echo $new;
//  $sql = "INSERT INTO playernumber(player1,player2) VALUES (?,?)";
//$sql = 'INSERT INTO playernumber(player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';


//****set $gid = select lastest gid

$sql = 'SELECT * FROM bskgame ORDER by createtime DESC  limit 1 ';
$stmt = $PDO->prepare($sql);
$stmt->execute();

$obj = $stmt->fetchObject();

$gid = $obj->gid;

//echo "$gid<br>";

$_SESSION['gid'] = $gid;



//****insert players to db

if(isset($_REQUEST['number'])){

//azalize  number
    $number = $_REQUEST['number'];
    $test = implode(",",$number);
    $players = $gid.",".$test;

//    //azalize  name
//    $name = $_REQUEST['name'];
//    $imdname = implode(",",$name);
//    $playername = $gid.",".$imdname;
//
//    $twid = $_REQUEST['twid'];
//    $imdtwid = implode(",",$twid);
//    $playertwid = $gid.",".$imdtwid;
//
//    $tel = $_REQUEST['tel'];
//    $imdtel = implode(",",$tel);
//    $playertel = $gid.",".$imdtel;


//echo $name;
//echo $imdname;
//echo $tel[0];
//    echo $tel[1];
//    echo '<br>';
//echo $twid[0];
//echo '<br>';
//echo $name[0];
//for ($i=0;$i<1;$i++){
//    $pnum = $number[$i];
//    $pna = $name[$i];
//    $ptw = $twid[$i];
//    $ptel = $tel[$i];
//
////    echo $pnum;
//    $sql = "INSERT INTO playermember(gid,playernumber,playername,twid, tel) VALUES ($gid,$pnum,$pna,$ptw,$ptel)";
//
//    $PDO->query($sql);
//}



//echo "$players<br>";
//// insert playernum to db
    $sql = "INSERT INTO playernumber(gid,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12) VALUES ($players)";

    $PDO->query($sql);

    $sql = 'SELECT * FROM bskgame ORDER by creattime DESC  limit 1 ';
    $stmt = $PDO->prepare($sql);
    $stmt->execute();

    header('Location:homeV5.php');


}




















?>
