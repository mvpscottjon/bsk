<?php

include 'sqlPdo3.php';

$PDO= new PDO($dsn,$username,$passwd,$options);


$sql = 'SELECT id,player,winx,winy,datetime FROM bsk ORDER BY id desc limit 10';
$stmt = $PDO->prepare($sql);
$rs = $stmt->execute();

//$Obj = $stmt->fetchObject();

//var_dump($Obj);
        echo '<table border="1" width="100%">';
            echo '<tr>';
            echo    "<th>Id</th>";
            echo      "<th>Player</th> ";
            echo   "<th>winX</th>";
            echo  "<th>winY</th>";
            echo "<th>AddTime</th>";
            echo '</tr>';
        while ($Obj = $stmt->fetchObject()) {
                echo '<tr>';
                echo "<td>{$Obj->id}</td>";
                echo "<td>$Obj->player</td>";
                echo "<td>$Obj->winx</td>";
                echo "<td>$Obj->winy</td>";
                echo "<td>$Obj->datetime</td>";
                echo '</tr>';

        }
        echo '</table>';



?>