<?php
//error_reporting(0);
$con = mysqli_connect('localhost', 'u763220561_admin', 'Admin123');
$db = mysqli_select_db($con,'u763220561_qtms');

$fname = $_POST['fname'];
$fname = mysqli_real_escape_string($con,$fname);
$fname = strip_tags($fname);

$lname = $_POST['lname'];
$lname = mysqli_real_escape_string($con,$lname);
$lname = strip_tags($lname);

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con,$email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);
$password = strip_tags($password);
$password = MD5($password);

$contact = $_POST['contact'];
$contact = mysqli_real_escape_string($con,$contact);
$contact = strip_tags($contact);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con,$address);
$address = strip_tags($address);

$zipcode = $_POST['Zipcode'];
$zipcode = mysqli_real_escape_string($con,$zipcode);
$zipcode = strip_tags($zipcode);


$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$/";
$query = "SELECT * FROM user WHERE Email='$email'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if ($num != 0)
	{
	$m = "<span style='color:red;'>Email Already Exists</span>";
	header('location: login.php?m1='.$m);
	}
else if (!preg_match($regex_email, $email))
	{
	$m = "<span style='color: red;'>Not a valid Email Id</span>";
	header('location: login.php?m1='.$m);
	}

else
	{
	$query = "INSERT INTO user(FName, LName, Email, Password, Phone, Address, Zipcode,Status)VALUES('$fname','$lname','$email','$password','$contact','$address','$zipcode','Active')";
	mysqli_query($con,$query);
	session_start();
	$_SESSION['email']=$email;
    $q = "SELECT User_id from user WHERE Email='$email'"; 
    $result=mysqli_query($con,$q);
    $row = mysqli_fetch_array($result);
    $id = $row['User_id'];
        echo "<script>
					alert('Account Successfully Created');
					window.location.href='Index.php?fname=$fname&id=$id';
					</script>";	
	//echo '<script>alert("Account Successfully Created")</script>';
	//header('location: Index.php?fname='.$fname.'&'.'id='.$id);	
	}
?>		