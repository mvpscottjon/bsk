<?php

include 'sqlPdo3.php';

$PDO= new PDO($dsn,$username,$passwd,$options);


$sql = 'SELECT id,gid,playernumber,getx,gety,madeormiss,createtime FROM bsk ORDER BY id DESC limit 5';
$stmt = $PDO->prepare($sql);
$rs = $stmt->execute();

//$Obj = $stmt->fetchObject();




//var_dump($Obj);
//echo "<div>";
//echo '<label style=" text-align: center">play by play</label>';
echo '<lable style="font-size: 16px;  float: inherit; color: #ac2925">Play by Play:</lable>';
        echo '<table >';
            echo '<tr >';
            echo    "<th>Id</th>";
            echo    "<th>GameId</th>";
            echo      "<th>PlayerNo.</th> ";
//            echo   "<th>getX</th>";
//            echo  "<th>getY</th>";
            echo  "<th>MadeOrMiss</th>";
            echo  "<th>Time</th>";

            echo '</tr>';
        while ($Obj = $stmt->fetchObject()) {
                echo '<tr >';
                echo "<td>{$Obj->id}</td>";
                 echo "<td>{$Obj->gid}</td>";
                echo "<td>$Obj->playernumber</td>";
//                echo "<td>$Obj->getx</td>";
//                echo "<td>$Obj->gety</td>";
                echo "<td>";
                $made= $Obj->madeormiss;
                    if ($made == 1){
                        echo 'made';
                    }else if($made == 0) {
                    echo 'miss';
                     }
                echo"</td>";
                echo "<td>$Obj->createtime</td>";
                echo '</tr>';

        }
        echo '</table>';

//echo "<div>";

?>