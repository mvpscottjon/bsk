<?php
//**********show player value on select option
session_start();
include 'sqlPdo3.php';
$PDO= new PDO($dsn,$username,$passwd,$options);

if ($_SESSION['gid'] ){
    $gid = $_SESSION['gid'];



//$sql = 'SELECT * FROM bskgame ORDER by createtime DESC  limit 1 ';
//$stmt = $PDO->prepare($sql);
//$stmt->execute();
//
//$obj = $stmt->fetchObject();
//
//$gid = $obj->gid;
//var_dump($gid);


//gameid = gid
$sql = "SELECT * FROM playernumber WHERE gid = $gid ORDER by id DESC  limit 12 ";
$stmt = $PDO->prepare($sql);
$stmt->execute();

//echo "<table border='1' width='50%'>";
//echo   "<th>Id</th>";
//echo   "<th>Game</th>";
//echo   "<th>Player1</th>";
//echo   "<th>Player2</th>";
//echo   "<th>Player3</th>";
//echo   "<th>Player4</th>";
//echo   "<th>Player5</th>";
//echo   "<th>Player6</th>";
//echo   "<th>Player7</th>";
//echo   "<th>Player8</th>";
//echo   "<th>Player9</th>";
//echo   "<th>Player10</th>";
//echo   "<th>Player11</th>";
//echo   "<th>Player12</th>";

//
$val = $stmt->fetchObject();


$json = json_encode($val);

echo $json;

}

//
//while($val = $stmt->fetchObject() ){
//echo "<tr>";
//    echo "<td>$val->id</td>";
//    echo "<td>$val->game</td>";
//    echo "<td>$val->player1</td>";
//    echo "<td>$val->player2</td>";
//    echo "<td>$val->player3</td>";
//    echo "<td>$val->player4</td>";
//    echo "<td>$val->player5</td>";
//    echo "<td>$val->player6</td>";
//    echo "<td>$val->player7</td>";
//    echo "<td>$val->player8</td>";
//    echo "<td>$val->player9</td>";
//    echo "<td>$val->player10</td>";
//    echo "<td>$val->player11</td>";
//    echo "<td>$val->player12</td>";
//
//echo "</tr>";
//}
//
//echo "</table>";


