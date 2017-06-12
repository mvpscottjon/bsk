<?php

include 'sqlPdo3.php';
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


//****select lastest gid

$sql = 'SELECT * FROM bskgame ORDER by createtime DESC  limit 1 ';
$stmt = $PDO->prepare($sql);
$stmt->execute();

$obj = $stmt->fetchObject();

$gid = $obj->gid;

//echo "$gid<br>";





//****insert players to db

if(isset($_REQUEST['number'])){


    $number = $_REQUEST['number'];
    $test = implode(",",$number);
    $players = $gid.",".$test;

//echo "$players<br>";

    $sql = "INSERT INTO playernumber(gid,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12) VALUES ($players)";

    $PDO->query($sql);

    $sql = 'SELECT * FROM bskgame ORDER by creattime DESC  limit 1 ';
    $stmt = $PDO->prepare($sql);
    $stmt->execute();

    header('Location:homeV4.php');


}



//*****return players json Obj
$sql = "SELECT * FROM playernumber WHERE gid = $gid ORDER by id DESC  limit 1";
$stmt = $PDO->prepare($sql);
$stmt->execute();

$val = $stmt->fetchObject();
$json = json_encode($val);

//echo $json;



//

///update x y
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


    $sql = 'INSERT INTO bsk (gid,playernumber,getx,gety,clientx,clienty,screenx,screeny,offsetx,offsety,madeormiss) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$gid,$player,$mx,$my,$cx,$cy,$sx,$sy,$ox,$oy,$mm]);





}

///****draw old shoot   where playernumber and gid
if(isset($_REQUEST['pOld'])){

    $pOld = $_REQUEST['pOld'];

    $sql = 'SELECT * FROM bsk WHERE playernumber = ? and gid= ? ';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$pOld,$gid]);


    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $json=json_encode($results);



    echo $json;

}














//    $stmt = $PDO->prepare($sql);
//    $stmt->execute([$test]);

//}

//$sql = "INSERT INTO bskmember(player1,player2,player3) VALUES (?,?,?)";
//
//$stmt = $PDO->prepare($sql);
//$stmt->execute([$values]);


//$sql = 'INSERT INTO bskmember(player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';





?>