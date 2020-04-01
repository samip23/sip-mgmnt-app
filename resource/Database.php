<?php
//initialize variables to hold connection parameters

$host="ec2-34-202-7-83.compute-1.amazonaws.com";
$user = "ulgqhgizgnazhw";
$password="3d0f9251d4892fbb4527cd5af5912f7c3b92d38cab3c095eb3240e376c2736bb";
$dbname="ddk4hi9q2quf5j";
$port="5432";

try{
    //create an instance of the PDO class with the required parameters
    //$db = new PDO($dsn, $username, $password);
    
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

    $pdo = new PDO($dsn, $user, $password);

    //set pdo error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connected to the register database";

}catch (PDOException $ex){
    //display error message
    echo "Connection failed ".$ex->getMessage();
}