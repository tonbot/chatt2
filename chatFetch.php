<?php

header('Content-Type:application/json');
try {
    $conn=new PDO("mysql:host=localhost; dbname=toyin", "root","");    
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



 
$sql=$conn->query(  "SELECT * FROM chat ORDER BY time " );

$sql->setFetchMode(PDO::FETCH_ASSOC);
$row=$sql->fetchAll( );
echo json_encode($row);


} catch(PDOException $e) { echo $e->getMessage(); }
?>





