<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

if(empty($username)) {
    header("Location: ../index.html");
    exit();
}
try {

    require 'DBsite.inc.php';


    $mysql = "INSERT INTO clients VALUES(null,:username,:email, :pwd)";

    $stmt = $pdo->prepare($mysql);

    $stmt -> bindParam(":username",$username);
    $stmt -> bindParam(":email" ,$email);
    $stmt -> bindParam(":pwd",$pwd);

    $stmt->execute();

    $pdo = null;
    $stmt = null;
    
    
    header("Location: ../index.html");

    die();

} catch (PDOException  $e)

{
    die("Query failed" .  $e->getMessage() );
    
} 
}else 
{
    header("Location: ../index.html");
}