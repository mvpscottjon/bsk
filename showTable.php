<?php

include 'sqlPdo3.php';

$PDO= new PDO($dsn,$username,$passwd,$options);


$sql = 'SELECT id,player,getx,gety,clientx,clienty FROM bsk ORDER BY id desc limit 10';
$stmt = $PDO->prepare($sql);
$rs = $stmt->execute();

//$Obj = $stmt->fetchObject();

//var_dump($Obj);
        echo '<table border="1" width="100%">';
            echo '<tr>';
            echo    "<th>Id</th>";
            echo      "<th>Player</th> ";
            echo   "<th>getX</th>";
            echo  "<th>getY</th>";
            echo "<th>cx</th>";
            echo "<th>cy</th>";
            echo '</tr>';
        while ($Obj = $stmt->fetchObject()) {
                echo '<tr>';
                echo "<td>{$Obj->id}</td>";
                echo "<td>$Obj->player</td>";
                echo "<td>$Obj->getx</td>";
                echo "<td>$Obj->gety</td>";
                echo "<td>$Obj->clientx</td>";
                echo "<td>$Obj->clienty</td>";
                echo '</tr>';

        }
        echo '</table>';



?>