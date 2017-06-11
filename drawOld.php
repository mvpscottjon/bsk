<?php


include 'sqlPdo3.php';
$PDO= new PDO($dsn,$username,$passwd,$options);


$p = $_REQUEST['playernum'];

$sql = 'SELECT * FROM bsk WHERE playernumber = ?';
$stmt = $PDO->prepare($sql);
$stmt->execute([$p]);


$results=$stmt->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);



echo $json;
