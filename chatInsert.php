<?php
try {
    $conn=new PDO("mysql:host=localhost; dbname=toyin", "root",""); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$name=$_POST['name'];
$msg=$_POST['msg'];

if($name && $msg)
{
$sql=$conn->prepare("INSERT INTO chat (name, message) VALUES ( ?, ? )");
$sql->execute([$name,$msg]);
}

}
catch(PDOException $e) { echo $e->getMessage(); } 

?>




