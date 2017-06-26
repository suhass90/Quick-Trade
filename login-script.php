<?php
$con = mysql_connect('localhost', 'u763220561_admin', 'Admin123');
$db = mysql_select_db('u763220561_qtms');


$email = $_POST['e-mail'];
$email = mysql_real_escape_string($email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysql_real_escape_string($password);
$password = strip_tags($password);
$password = MD5($password);

$query = "SELECT Email, Password,User_id,Fname FROM user WHERE Email='$email'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$password1 = $row['Password'];
if ($num == 0)
	{
	echo "<script>
					alert('Email $email Does not Exist');
					window.location.href='login.php';
					</script>";
	}
else
	if ($password == $row['Password'])
		{
		session_start();
		$_SESSION['email']=$row['Email'];
                $_SESSION['Fname']= $row['Fname'];
                $_SESSION['id']= $row['User_id'];
		$id = $row['User_id'];
		$fname = $row['Fname'];
		header('location: Index.php?fname='.$fname.'&'.'id='.$id);		
		}
	else
		{
		
		echo "<script>
					alert('Incorrect Password');
					window.location.href='login.php';
					</script>";
		}



?>	