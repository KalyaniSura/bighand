<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost         = "localhost";
$dbname         = "bighand";
$dbuser         = "root";
$dbpass         = "1234";
try {
        // database connection
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // new data
        $name = $_GET['name'];
        $cellno = $_GET['cellno'];
        $gender = $_GET['gender'];
        $longitude = $_GET['longitude'];
 echo $name." name ".$cellno." cellno ".$gender." gender ".$longtitude."";
 
echo "<br>";   
        echo "<center><h1>thank you for registering</h1></center>";


         //echo "<center><b>thank you for registartion</b></center>";
        $insertStmt1 = $conn->prepare("INSERT INTO  incident_location (name,cellno,gender,longitude)
                        VALUES (:name,:cellno,:gender,:longitude)");
        $insertStmt1->bindParam(':name', $name, PDO::PARAM_STR);
        $insertStmt1->bindParam(':cellno', $cellno, PDO::PARAM_STR);
        $insertStmt1->bindParam(':gender', $gender, PDO::PARAM_STR);
        $insertStmt1->bindParam(':longitude', $longitude, PDO::PARAM_STR);

        $insertStmt1->execute();

}

