<?php


include 'sqlPdo3.php';
session_start();
$PDO= new PDO($dsn,$username,$passwd,$options);


if ($_SESSION['gid']) {
    $gid = $_SESSION['gid'];

//    $p = $_REQUEST['playernum'];
//
//    $sql = 'SELECT * FROM bsk WHERE playernumber = ?';
//    $stmt = $PDO->prepare($sql);
//    $stmt->execute([$p]);
//
//
//    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    $json = json_encode($results);
//
//
//    echo $json;


///****draw old shoot   where playernumber and gid
    if (isset($_REQUEST['pOld'])) {

        $pOld = $_REQUEST['pOld'];

        $sql = 'SELECT * FROM bsk WHERE playernumber = ? and gid= ? ';
        $stmt = $PDO->prepare($sql);
        $stmt->execute([$pOld, $gid]);


        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);


        echo $json;

    }

}

?>