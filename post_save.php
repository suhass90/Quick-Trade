		<?php
			$dbhost = 'localhost';
			$dbuser = 'u763220561_admin';
			$dbpass = 'Admin123';
			 
			//error_reporting(0);
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
				 
			if(! $conn )
				{
					die('Could not connect: ' . mysqli_error());
				}
			mysqli_select_db($conn,'u763220561_qtms');
			$desc=$_GET['desc'];
			$ad_id=$_GET['id'];
			echo "<script>alert('$desc')</script>";
			$sql = "UPDATE advertisement set Description=\"$desc\" where Ad_Id=\"$ad_id\"" ;
	       	$retval = mysqli_query( $conn, $sql );
			$imagename = $_GET['image'];
			$sql = "SELECT Photo_id FROM advertisement where Ad_Id=\"$ad_id\"" ;
	       	$retval = mysqli_query( $conn, $sql );
			$row = mysqli_fetch_array($retval, 1);
			$photo_id = $row['Photo_id'];
                        if($imagename!="undefined")
                        {
			$sql = "UPDATE photo set Primary_photo=\"$imagename\" where Photo_id=\"$photo_id\"" ;
	       	        $retval = mysqli_query( $conn, $sql );
                        } 
			$cat_id=$_GET['Cat_id'];
			if($cat_id == 1)
			{
				$ad_id = $_GET['id'];
				$flag = $_GET['flag'];
				$r = $_GET['r'];
				
				$regno = explode(":",$_GET['regno'])[1];
				$brand = explode(":",$_GET['brand'])[1];
				$odometer = explode(":",$_GET['odometer'])[1];
				$year = explode(":",$_GET['year'])[1];
				$fueltype = explode(":",$_GET['fueltype'])[1];
				$price = explode(":",$_GET['price'])[1];				
				//Update query
				$sql = "UPDATE cars set Reg_no=\"$regno\", Model=\"$brand\", Odometer=\"$odometer\", Price=\"$price\", FuelType=\"$fueltype\", Year=\"$year\" where Ad_Id=\"$ad_id\"" ;
				$retval = mysqli_query( $conn, $sql );
			}
			else if($cat_id == 2)
			{
				$ad_id = $_GET['id'];
				$flag = $_GET['flag'];
				$r = $_GET['r'];
				//$imagename = $_GET['image'];
				$pets = explode(">>",$_GET['pets'])[1];
				$age = explode(":",$_GET['age'])[1];
				$petprice = explode(":",$_GET['price'])[1];
				//Update query
				$sql = "UPDATE pets set Type=\"$pets\", Age=\"$age\", Price=\"$petprice\" where Ad_Id=\"$ad_id\"" ;
				$retval = mysqli_query( $conn, $sql );

			}
			else if($cat_id == 3)
			{
				$ad_id = $_GET['id'];
				$flag = $_GET['flag'];
				$r = $_GET['r'];
				//$imagename = $_GET['image'];
				$mlbrand = explode(":",$_GET['mlbrand'])[1];
				$mlyear = explode(":",$_GET['mlyear'])[1];
				$mlprice = explode(":",$_GET['mlprice'])[1];	
				//Update query
				$sql = "UPDATE mobile_laptop set Product='Mobile', Brand=\"$mlbrand\", Price=\"$mlprice\", Year=\"$mlyear\" where Ad_Id=\"$ad_id\"" ;
				$retval = mysqli_query( $conn, $sql );
			}
			else
			{
				$ad_id = $_GET['id'];
				$flag = $_GET['flag'];
				$r = $_GET['r'];
				//$imagename = $_GET['image'];
				$mlbrand = explode(":",$_GET['mlbrand'])[1];
				$mlyear = explode(":",$_GET['mlyear'])[1];
				$mlprice = explode(":",$_GET['mlprice'])[1];	
				//Update query
				$sql = "UPDATE mobile_laptop set Product='Laptop', Brand=\"$mlbrand\", Price=\"$mlprice\", Year=\"$mlyear\" where Ad_Id=\"$ad_id\"" ;
				$retval = mysqli_query( $conn, $sql );
			}
			echo "<script>
					alert('Ad Successfully Updated');
					window.location.href='Index.php?myads=8';
					</script>";	

		?>	