<?php
//initialize variables to hold connection parameters
$db = parse_url(getenv("DATABASE_URL"));
$username = 'ulgqhgizgnazhw';
$dsn = 'psql:host=ec2-34-202-7-83.compute-1.amazonaws.com; dbname=ddk4hi9q2quf5j';
$password = '3d0f9251d4892fbb4527cd5af5912f7c3b92d38cab3c095eb3240e376c2736bb';

try{
    //create an instance of the PDO class with the required parameters
    //$db = new PDO($dsn, $username, $password);
    
    $pdo = new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            $db["ec2-34-202-7-83.compute-1.amazonaws.com"],
            $db["5432"],
            $db["ulgqhgizgnazhw"],
            $db["3d0f9251d4892fbb4527cd5af5912f7c3b92d38cab3c095eb3240e376c2736bb"],
            ltrim($db["path"], "/")
        ));

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connected to the register database";

}catch (PDOException $ex){
    //display error message
    echo "Connection failed ".$ex->getMessage();
}