<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "bighand";
$dbuser		= "root";
$dbpass		= "1234";
try {
	// database connection
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// new data
	$name = $_POST['user'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$location = $_POST['location'];
	$phonenum = $_POST['phonenum'];
          
echo "$phonenum"." ".$name;

	if($name == '') {
		$errmsg_arr[] = 'You must enter your First Name';
		$errflag = true;
	}
	if($emailid == '') {
		$errmsg_arr[] = 'You must enter your  emailid';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'You must enter your password';
		$errflag = true;
	}
	if($location==''){
	     $errmsg_arr[] = 'enter your location';
		 $errmsg = true;
	}
	if($phonenum==''){
	     $errmsg_arr[] = 'enter your phone number';
		 $errmsg = true;
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		//header("location: index1.php");
		exit();
	}
	$insertStmt1 = $conn->prepare("INSERT INTO registration (name, email, password, location,phonenbr) 
												VALUES (:name, :emailid, :password, :location, :phonenum)");
	$insertStmt1->bindParam(':name', $name, PDO::PARAM_STR);
        $insertStmt1->bindParam(':emailid', $emailid, PDO::PARAM_STR);
        $insertStmt1->bindParam(':password', $password, PDO::PARAM_STR);
        $insertStmt1->bindParam(':location', $location, PDO::PARAM_STR);	
	$insertStmt1->bindParam(':phonenum', $phonenum, PDO::PARAM_STR);	
	$insertStmt1->execute();
	//header("location: index1.php");
}
catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }$conn = null;
?>
