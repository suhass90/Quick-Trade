<?php
//error_reporting(0);
$con = mysqli_connect('localhost', 'u763220561_admin', 'Admin123');
$db = mysqli_select_db($con,'u763220561_qtms');

$title= $_POST['Title'];
$title = mysqli_real_escape_string($con,$title);
$title = strip_tags($title);


if(isset($_POST['image']))
{
$image = $_POST['image'];
$image = mysqli_real_escape_string($con,$image);
$image = strip_tags($image);
}


/*$from = $_POST['from'];
$from = mysqli_real_escape_string($con,$from);
$from = strip_tags($from);

$to = $_POST['to'];
$to = mysqli_real_escape_string($con,$to);
$to = strip_tags($to);*/

if(isset($_POST['RegNo']))
{

	$RegNo = $_POST['RegNo'];
	$RegNo = mysqli_real_escape_string($con,$RegNo);
	$RegNo = strip_tags($RegNo);
	if($RegNo != '')
	{
		$Model = $_POST['Model'];
		$Model = mysqli_real_escape_string($con,$Model);
		$Model = strip_tags($Model);
		/*}

		if(isset($_POST['Odometer']))
		{*/
		$Odometer = $_POST['Odometer'];
		$Odometer = mysqli_real_escape_string($con,$Odometer);
		$Odometer = strip_tags($Odometer);
		/*}
		if(isset($_POST['Price']))
		{*/
		$Price = $_POST['Price'];
		$Price = mysqli_real_escape_string($con,$Price);
		$Price = strip_tags($Price);
		/*}
		if(isset($_POST['FuelType']))
		{*/
		$FuelType = $_POST['FuelType'];
		$FuelType = mysqli_real_escape_string($con,$FuelType);
		$FuelType = strip_tags($FuelType);
		/*}
		if(isset($_POST['Year']))
		{*/
		$Year = $_POST['Year'];
		$Year = mysqli_real_escape_string($con,$Year);
		$Year = strip_tags($Year);

		$Description = $_POST['Description'];
		$Description = mysqli_real_escape_string($con,$Description);
		$Description = strip_tags($Description);

		$catId=1;
	}

}
if(isset($_POST['Type']))
{
		
	$Type = $_POST['Type'];
	$Type = mysqli_real_escape_string($con,$Type);
	$Type = strip_tags($Type);
	if($Type != '')
	{
		$Age = $_POST['Age'];
		$Age = mysqli_real_escape_string($con,$Age);
		$Age = strip_tags($Age);

		$PetPrice = $_POST['PetPrice'];
		$PetPrice = mysqli_real_escape_string($con,$PetPrice);
		$PetPrice = strip_tags($PetPrice);
		$catId=2;

		$Description = $_POST['PetDescription'];
		$Description = mysqli_real_escape_string($con,$Description);
		$Description = strip_tags($Description);
	}
}

if(isset($_POST['Product']))
{
	$Product = $_POST['Product'];
	$Product = mysqli_real_escape_string($con,$Product);
	$Product = strip_tags($Product);
	if($Product != '')
	{
		$MLModel = $_POST['MLModel'];
		$MLModel = mysqli_real_escape_string($con,$MLModel);
		$MLModel = strip_tags($MLModel);

		$MLPrice = $_POST['MLPrice'];
		$MLPrice = mysqli_real_escape_string($con,$MLPrice);
		$MLPrice = strip_tags($MLPrice);

		$MLYear = $_POST['MLYear'];
		$MLYear = mysqli_real_escape_string($con,$MLYear);
		$MLYear = strip_tags($MLYear);

		$Description = $_POST['MLDescription'];
		$Description = mysqli_real_escape_string($con,$Description);
		$Description = strip_tags($Description);
		$catId=3;
	}
}
//check for the null values and then insert to appropriate tables
//WHILE CHECKING FOR NULL VALUES IF U CHECK ONE VARIABLE OF EACH CATEGORY WOULD BE FINE TO DETERMINE AS TO WHICH TABLE TO INSERT



$sql="SELECT * FROM photo";				
mysqli_select_db($con,'quicktrade');
$retval = mysqli_query( $con, $sql );
$row_cnt = mysqli_num_rows($retval);
if ($row_cnt>0)
{
	$sql1="SELECT MAX(Photo_id) FROM photo";				
	mysqli_select_db($con,'quicktrade');
	$retval1 = mysqli_query( $con, $sql1 );
	$row = mysqli_fetch_array($retval1, 1);
	$ph = $row["MAX(Photo_id)"]+1	;
}
else
{
	$ph=1;
}

$sql2="SELECT * FROM advertisement";				
mysqli_select_db($con,'quicktrade');
$retval2 = mysqli_query( $con, $sql2 );
$row_cnt = mysqli_num_rows($retval2);
if ($row_cnt>0)
{
	$sql3="SELECT MAX(Ad_Id) FROM advertisement";				
	mysqli_select_db($con,'quicktrade');
	$retval3 = mysqli_query( $con, $sql3 );
	$row1 = mysqli_fetch_array($retval3, 1);
	$ad_id = $row1["MAX(Ad_Id)"]+1;
}
else
{
	$ad_id=1;
}
	$f = fopen("a.txt","r");
	$s = fgets($f);
	$arr = explode("|", $s); 
	$userid = $arr[0];
	fclose($f);
	$query = "INSERT INTO photo(Photo_id,Primary_photo) VALUES ('$ph','$image');";
	mysqli_query($con,$query);

	$query = "INSERT INTO advertisement (Ad_Id,Title, User_Id, Cat_id, Photo_id, Description, Status) VALUES ('$ad_id','$title', '$userid', '$catId', '$ph', '$Description', 'Active');";
	mysqli_query($con,$query);
	
	if($catId==1)
	{

		$query = "INSERT INTO cars (Reg_no, Model, Ad_id, Odometer, Price, FuelType, Year) VALUES ('$RegNo', '$Model', '$ad_id', '$Odometer', '$Price', '$FuelType', '$Year');";
		mysqli_query($con,$query);

		
	}
	if($catId==2)
	{		
		$query = "INSERT INTO pets (Type, Ad_id, Age, Price) VALUES ('$Type', '$ad_id', '$Age', '$PetPrice');";
		mysqli_query($con,$query);

		
	}
	if($catId==3)
	{		
		$query = "INSERT INTO mobile_laptop (Product, Ad_id, Brand, Price, Year) VALUES ('$Product', '$ad_id',  '$MLModel','$MLPrice', '$MLYear');";
		mysqli_query($con,$query);

		
	}
	mysqli_close($con);
	//session_start();
	/*$_SESSION['email']=$email;
    $q = "SELECT User_id from user WHERE Email='$email'"; 
    $result=mysqli_query($con,$q);
    $row = mysqli_fetch_array($result);*/
    // NAVIGATE TO THE PAGE YOU AND PARAMETERS IF ANY U WANT TO SEND
echo "<script>
					alert('Ad Successfully Posted');
					window.location.href='Index.php?myads=8';
					</script>";
	
?>	