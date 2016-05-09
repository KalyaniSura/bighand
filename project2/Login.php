<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "bighand";
$dbuser		= "root";
$dbpass		= "1234";
$wrong_msg  =  "Default Message";
try {
	// database connection
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	echo $emailid;
	echo $password;
	if($emailid == '') {
		$errmsg_arr[] = 'You must enter your  emailid';
		$wrong_msg = 'You must enter your  emailid';
		echo "<script type='text/javascript'>alert('$wrong_msg');</script>";
		$errflag = true;
		//alert("You must enter your  emailid");
		//echo '<script language="javascript">;
		//echo 'alert("enter login name")';
		//echo '</script>';
		//phpAlert(   "Hello world!\\n\\nPHP has got an Alert Box"   );
	}
	if($password == '') {
		$errmsg_arr[] = 'You must enter your password';
		$errflag = true;
	}
	
    $stmt = $conn->prepare("SELECT emailid,password FROM registration WHERE emailid=:emailid and password=:password");
	$stmt->bindParam(':emailid', $emailid, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);	
	$stmt->execute();
	
	
	//$emailid = $stmt->fetchColumn();
	
	if($emailid == false)
        {
            $message = 'Access Error';
        }
        else
        {
            $message = 'Welcome '.$phpro_username;
        }
	
	//header("location: iDonate.php");
	}
catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }$conn = null;
?>
