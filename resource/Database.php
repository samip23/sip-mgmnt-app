<?php
//initialize variables to hold connection parameters
$username = 'root';
$dsn = 'mysql:host=127.0.0.1; dbname=register';
$password = 'MAST3RIP77';

try{
    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn, $username, $password);

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connected to the register database";

}catch (PDOException $ex){
    //display error message
    echo "Connection failed ".$ex->getMessage();
}