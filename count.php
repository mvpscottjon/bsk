<?php
include 'sqlPdo3.php';
session_start();

if ($_SESSION['gid'] ) {
$gid = $_SESSION['gid'];}
//$splayer = 4;

if (isset($_REQUEST['pOld'])){
    $splayer = $_REQUEST['pOld'];
    $url = $_REQUEST['url'];

}




$PDO= new PDO($dsn,$username,$passwd,$options);


$sql1 = "SELECT COUNT(madeormiss) FROM bsk WHERE gid = $gid AND madeormiss='1'";
$sql2 = "SELECT COUNT(madeormiss) FROM bsk WHERE madeormiss='0'";

$stmt = $PDO->prepare($sql1);
 $stmt->execute();

$obj1 = $stmt->fetchColumn();

    $stmt = $PDO->prepare($sql2);
    $stmt->execute();

    $obj2 = $stmt->fetchColumn();

    $fg =round(($obj1)/($obj1+$obj2) * (100) );


//echo $fg;

echo "<span >Total Made:<laber id = ttMade>$obj1</laber></span> <br>";
echo "<span id = ttMiss>Total Miss:</span><laber id = ttMiss>$obj2</laber> <br>";
echo '<hr>';
echo " <span >Total Field Goat:<label>$fg</label><label>%</label></span> <br>"
//echo '<br>';
//echo $obj1;
//echo '<br>';
//    echo $obj2;
//    echo '<br>';
//    echo $splayer;
//echo $url;



//                <span >Total Field Goat:<label id = tFG></label><label>%</label></span> <br>
//                <span id = pMade>This player Made:</span> <br>
//                <span id = pMiss>This player Miss:</span> <br>
//                 <span id = pFG>This Player Field Goat(%):</span> <br>


?>
