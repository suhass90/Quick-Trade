<!DOCTYPE html>

<html>
	
	<head>

		<meta charset="utf-8" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="icon" href="demo_icon.gif" type="image/gif" />		

		<!--Styles ORDER IS IMPORTANT-->

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

		<link rel="stylesheet" type="text/css" href="css/main.css" />

		<link rel="stylesheet" type="text/css" href="css/article_home.css" />

		<style type="text/css">
			
			footer
				{
					position: relative;
					bottom: 0px;
				}

		</style>
	
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
			$id=$_GET["id"];
			$flag=$_GET["flag"];
			$sql="SELECT * FROM advertisement Where Ad_Id=\"$id\"";
			mysqli_select_db($conn,'u763220561_qtms');
			$retval = mysqli_query( $conn, $sql );
				 
			if(! $retval )
				{
					die('Could not get data: ' . mysqli_error());
				}
				 
			$xdata = array();
			$row = mysqli_fetch_array($retval, 1);
			$xdata[0] = $row['Title'];
			$x =  $row['User_Id'];
			$sql1="SELECT Fname,Lname,Address,Phone FROM user Where User_id=\"$x\"";
			mysqli_select_db($conn,'u763220561_qtms');
			$retval1 = mysqli_query( $conn, $sql1 );
			$row1 = mysqli_fetch_array($retval1, 1);
			$xdata[1] = $row1['Fname']." ".$row1['Lname'];
			$xdata[2] = $row['Description'];
			$xdata[3] = $row['Post_date'];
			$xdata[10] = $row['Cat_id'];
			$xdata[11] = $row1['Address'];
			$xdata[12] = $row1['Phone'];
			$xdata[13] = $flag;
                        $xdata[25] = $row1['Fname'];
			$xdata[26] = $x;
		    if($xdata[10]==1)
			{
				$id=$_GET["id"];
				
				$sql3="SELECT * FROM cars Where Ad_id=\"$id\"";
				mysqli_select_db($conn,'u763220561_qtms');
				$retval3 = mysqli_query( $conn, $sql3 );
				$row3 = mysqli_fetch_array($retval3, 1);
				$xdata[40] = $row3['Reg_no'];
				$xdata[4] = $row3['Model'];
				$xdata[5] = $row3['Odometer'];
				$xdata[6] = $row3['Price'];
				$xdata[7] = $row3['FuelType'];
				$xdata[8] = $row3['Year'];				
			}
			else if($xdata[10]==2)
			{
				$id=$_GET["id"];
				$sql3="SELECT * FROM pets Where Ad_id=\"$id\"";
				mysqli_select_db($conn,'u763220561_qtms');
				$retval3 = mysqli_query( $conn, $sql3 );
				$row3 = mysqli_fetch_array($retval3, 1);
				$xdata[4] = $row3['Type'];
				$xdata[5] = $row3['Age'];
				$xdata[6] = $row3['Price'];
			}
			else if($xdata[10]==3)
			{
				
                                $id=$_GET["id"];
				$sql3="SELECT * FROM mobile_laptop Where Ad_id=\"$id\"";
				mysqli_select_db($conn,'u763220561_qtms');
				$retval3 = mysqli_query( $conn, $sql3 );
				$row3 = mysqli_fetch_array($retval3, 1);
				$xdata[4] = $row3['Brand'];
				$xdata[5] = $row3['Price'];
				$xdata[6] = $row3['Year'];
			}
			else if($xdata[10]==4)
			{
				
                                $id=$_GET["id"];
				$sql3="SELECT * FROM mobile_laptop Where Ad_id=\"$id\"";
				mysqli_select_db($conn,'u763220561_qtms');
				$retval3 = mysqli_query( $conn, $sql3 );
				$row3 = mysqli_fetch_array($retval3, 1);
				$xdata[4] = $row3['Brand'];
				$xdata[5] = $row3['Price'];
				$xdata[6] = $row3['Year'];
			}
			//$xdata[5] = $row['Valid_to'];
			$y = $row['Photo_id'];
			$sql2="SELECT Primary_Photo FROM photo Where Photo_id=\"$y\"";				
			mysqli_select_db($conn,'u763220561_qtms');
			$retval2 = mysqli_query( $conn, $sql2 );
			$row2 = mysqli_fetch_array($retval2, 1);
			$xdata[9] = $row2["Primary_Photo"];
			
			//code to delete ad from tables

			if($_GET["r"]==1)
			{
					$sql6="SELECT Cat_id FROM advertisement Where Ad_id=\"$id\"";				
			                mysqli_select_db($conn,'u763220561_qtms');
			                $retval6 = mysqli_query( $conn, $sql6 );
			                $row6 = mysqli_fetch_array($retval6, 1);
			                $cat_id = $row6["Cat_id"];
                                        $sql4="DELETE FROM advertisement Where Ad_id=\"$id\"";
					$sql5="DELETE FROM photo Where Photo_id=\"$y\"";
                                        if($cat_id==1)
                                        {
                                           $sql7="DELETE FROM cars Where Ad_id=\"$id\"";
                                        }
                                        else if($cat_id==2)
                                        {
                                           $sql7="DELETE FROM pets Where Ad_id=\"$id\"";
                                        }
                                        else if($cat_id==3)
                                        {
                                           $sql7="DELETE FROM mobile_laptop Where Ad_id=\"$id\"";
                                        }
					mysqli_select_db($conn,'u763220561_qtms');
					$retval4 = mysqli_query( $conn, $sql4 );
					$retval5 = mysqli_query( $conn, $sql5 );
                                        $retval7 = mysqli_query( $conn, $sql7 );
					echo "<script>
					alert('Ad Successfully Removed');
					window.location.href='Index.php?myads=8';
					</script>";					
			}
			
			
			mysqli_close($conn);

		?>
		
		<title id="title-bar_header">

		</title>

	</head>

	<body>

		<header class="navbar navbar-default navbar-static-top">
			
			<div class="container">
				
				<div class="navbar-header">
                                        <a href="http://tradeqwick.esy.es/Index.php" id="home" >
					<h3 style="color:White">Quick Trade,Trade quick</h3>
                                        </a>
				</div>
				
				<div class="collapse navbar-collapse" id="navbar-ex-collapse">
				</div>
			
			</div>
		
		</header>
		
		<div class="section">
			
			<div class="container">
			
				<div class="row">
			
					<div class="col-md-9">
			
						<div class=" shadow-box">
			
							<article>
								
								<div class="title-box">
								
									<div class="article-img" id="title-image">
										
									</div>
									<div id='edit' class="article-img">
											<input type="button" value="Edit Ad" id="edit1" name="Edit" onclick="Edit()" style="margin-left:30px; margin-top:180px;"/>
											<input type="button" value="Remove Ad" id="remove" onclick="Remove()" style="margin-left:30px; margin-top:180px;"/>
									</div> 
									<div id='choose' class="article-img">								
								<input type="file" id="myFile" size="50" style="margin-left:30px; margin-top:180px;">										
									</div>
									<h1 class="article-title" id="title">
										
									</h1>
									<br>
									<span class="metadata-box" id="Post_date">
										<label for="Addedon">Added on </label>
									</span>
									</br>									
									<span class="metadata-box" id="author">
										 <label for="By">By </label>
									</span>	
									</br>									
									<span class="metadata-box" id="Location">
										 <label for="Location">Location: </label>
									</span>
									</br>									
									<span class="metadata-box" id="Phone">
										 <label for="Ph">Ph: </label>
									</span>

								</div>			
								<br>
								<br>
								<div id="1" class="metadata-box" name="div1" value="1">
									
									<h5 id="Regno">
										<label for="Brand">Reg No : </label>
									</h5>
									<h5 id="Brand">
										<label for="Brand">Brand : </label>
									</h5>

									<h5 id="Year">
										<label for="Year">Year : </label>
									</h5>
									
									<h5 id="Odometer">
										<label for="Odometer">Odometer : </label>
									</h5>
									
									<h5 id="Fuel Type">
										<label for="FuelType">Fuel Type : </label>
									</h5>
									
									<h5 id="Price">
										<label for="Price">Price : </label>
									</h5>

								</div>
								<div id="2" class="metadata-box" name="div2" value="2">
									
									<h5 id="Type">
										<label for="Pets">Pets >> </label>
									</h5>

									<h5 id="Age">
										<label for="Age">Age : </label>

									</h5>
									
									<h5 id="PetPrice">
										<label for="Price">Price : </label>
									</h5>

								</div>
								<div id="3" class="metadata-box" name="div3" value="3">
									
									<h5 id="MLBrand">
										<label for="Brand">Brand : </label>
									</h5>	
									
									<h5 id="MLPrice">
										<label for="Price3">Price : </label>
									</h5>
									
									<h5 id="MLYear">
										<label for="Year">Year : </label>
									</h5>

								</div>
								
								<label for="Description"> Description</label>
								<hr/>								
								
								<div class="content-box" id="content">
									<p>
										
									</p>
														
								</div>
					<div id='submit'>
						<input type="submit" name="submit" value="Save" id="subb" style="margin-top:20px; " onclick="Save()"> 
						<input type="button" value="Cancel" id="rests" onclick="Cancel()" style="margin-left:30px; margin-top:20px;">
					</div>

					<hr/>
							
				</article>
						
						</div>
					
					</div>
					
					
				</div>
			
			</div>
	
		</div>

		<footer class="section section-primary" style="position: relative;">
			
			<div class="container">
			
				<div class="btn-group btn-group-justified">
			
					<a class="btn" href="#"></a>
					<a class="btn" href="#"></a>  
			
				</div>
			
			</div>
		
		</footer>
		
		<script src="js/jquery-1.12.4.min.js"></script>

		<script src="js/bootstrap.min.js"></script>
		
		<script type="text/javascript">

			var data = <?php echo json_encode($xdata); ?>;
			content = data[2];
			content.replace ("\n","<br />");
                        var link = document.getElementById("home");					
                        link.href+='?fname='+data[25]+'&id='+data[26]+'&f='+1;
			document.getElementById("title-image").innerHTML = "<img class='header-img' src='images/imgs/"+data[9]+"'/>";
			document.getElementById("title-bar_header").innerHTML = data[0];
			document.getElementById("title").innerHTML = data[0];
			document.getElementById("author").innerHTML+= data[1];      		
			document.getElementById("content").innerHTML = content;
			document.getElementById("Post_date").innerHTML += data[3];
			document.getElementById("Location").innerHTML += data[11]
			document.getElementById("Phone").innerHTML += data[12];
			document.getElementById('submit').style.display = 'none';
			document.getElementById('choose').style.display = 'none';
		var id = data[10];
		var removed = data[14];
		var flag = data[13];
 		if (flag==0)
		{
			document.getElementById('edit').style.display = 'none';
			//document.getElementById('remove').visibility='hidden';
		}
		/*if (flag==1)
		{
			//document.getElementById("myP").contentEditable = true;
			document.getElementById("1").contenteditable = true;
		}*/
		if (id==1)
		{
			
			document.getElementById('2').style.display = 'none';
			document.getElementById('3').style.display = 'none';
			document.getElementById("Regno").innerHTML += data[40];			
			document.getElementById("Brand").innerHTML += data[4];
			document.getElementById("Year").innerHTML += data[8];
			document.getElementById("Odometer").innerHTML += data[5];
			document.getElementById("Fuel Type").innerHTML += data[7];
			document.getElementById("Price").innerHTML += data[6];
		}
		else if (id==2)
		{
			document.getElementById('1').style.display = 'none';
			document.getElementById('3').style.display = 'none';			
			document.getElementById("Type").innerHTML += data[4];
			document.getElementById("Age").innerHTML += data[5];
			document.getElementById("PetPrice").innerHTML += data[6];
		}
		else if (id==3||id==4)
		{
			document.getElementById('1').style.display = 'none';
			document.getElementById('2').style.display = 'none';			
			document.getElementById("MLBrand").innerHTML += data[4];
			document.getElementById("MLPrice").innerHTML += data[5];
			document.getElementById("MLYear").innerHTML += data[6];
		}
		function Edit()
		{
			document.getElementById(id).setAttribute("contentEditable",true);
			document.getElementById('content').setAttribute("contentEditable",true);
			document.getElementById(id).style.backgroundColor = "ghostwhite";
			document.getElementById('submit').style.display = 'block';
			document.getElementById('choose').style.display = 'block';
			//document.getElementById('remove').style.display = 'none';
			document.getElementById('edit').style.display = 'none';
		}
		function Remove()
		{
			var r = confirm("Are you sure you want to remove the Ad?");
			if (r==true)
			{
				var loc = location.href;
				loc = loc.replace(/(r=)[^\&]+/, '$1' + 1);				
				location.href = loc;
				
			}
			else if(r==false)
			{
				var loc = location.href;
				loc = loc.replace(/(r=)[^\&]+/, '$1' + 0);				
				location.href = loc;					
			}
		}
		function Cancel()
		{
			
			if (id==1)
			{
				
				document.getElementById('2').style.display = 'none';
				document.getElementById('3').style.display = 'none';
				document.getElementById("Regno").innerHTML = 'Brand : ' + data[40];
				document.getElementById("Brand").innerHTML = 'Brand : ' + data[4];
				document.getElementById("Year").innerHTML = 'Year : ' + data[8];
				document.getElementById("Odometer").innerHTML = 'Odometer : ' + data[5];
				document.getElementById("Fuel Type").innerHTML = 'Fuel Type : ' + data[7];
				document.getElementById("Price").innerHTML = 'Price : ' + data[6];
			}
			else if (id==2)
			{
				document.getElementById('1').style.display = 'none';
				document.getElementById('3').style.display = 'none';			
				document.getElementById("Type").innerHTML = 'Pets>> ' + data[4];
				document.getElementById("Age").innerHTML = 'Age : ' + data[5];
				document.getElementById("PetPrice").innerHTML = 'Price : ' + data[6];
			}
			else if (id==3||id==4)
			{
				document.getElementById('1').style.display = 'none';
				document.getElementById('2').style.display = 'none';			
				document.getElementById("MLBrand").innerHTML = 'Brand : ' + data[4];
				document.getElementById("MLPrice").innerHTML = 'Price : ' + data[5];
				document.getElementById("MLYear").innerHTML += 'Year : ' + data[6];
			}
			document.getElementById('submit').style.display = 'none';
			document.getElementById('choose').style.display = 'none';
			//document.getElementById('remove').style.display = 'block';
			document.getElementById('edit').style.display = 'block';
			document.getElementById(id).setAttribute("contentEditable",false);
			document.getElementById('content').setAttribute("contentEditable",false);
			document.getElementById("content").innerHTML = content;
			document.getElementById(id).style.backgroundColor = "transparent";
		}
	
			function Save()
			{
			var data = <?php echo json_encode($xdata); ?>;
			var desc = document.getElementById("content").innerText;
			if(data[10]==1)
			{
			var regno = document.getElementById("Regno").innerText.replace(/\s+/g, "");
			var brand = document.getElementById("Brand").innerText.replace(/\s+/g, "");
			var odometer = document.getElementById("Odometer").innerText.replace(/\s+/g, "");
			var year = document.getElementById("Year").innerText.replace(/\s+/g, "");
			var fueltype = document.getElementById("Fuel Type").innerText.replace(/\s+/g, "");
			var carprice = document.getElementById("Price").innerText.replace(/\s+/g, "");		
			var flags = window.location.search.substring(1);
			var arr = document.getElementById("myFile").value;
			var val = arr.split("\\");
			window.location.href="post_save.php?"+flags+"&brand="+brand+"&odometer="+odometer+"&year="+year+"&fueltype="+fueltype+"&price="+carprice+"&Cat_id="+data[10]+"&image="+val[2]+"&desc="+desc+"&regno="+regno;
			}
			
			else if(data[10]==2)
			{
			var age = document.getElementById("Age").innerText.replace(/\s+/g, "");
			var pets = document.getElementById("Type").innerText.replace(/\s+/g, "");
			var price = document.getElementById("PetPrice").innerText.replace(/\s+/g, "");		
			var flags = window.location.search.substring(1);
			var arr = document.getElementById("myFile").value;
			var val = arr.split("\\");
			window.location.href="post_save.php?"+flags+"&pets="+pets+"&price="+price+"&age="+age+"&Cat_id="+data[10]+"&image="+val[2]+"&desc="+desc;
			}

			else if(data[10]==3||data[10]==4)
			{
				var mlbrand = document.getElementById("MLBrand").innerText.replace(/\s+/g, "");
				var mlyear = document.getElementById("MLYear").innerText.replace(/\s+/g, "");
				var mlprice = document.getElementById("MLPrice").innerText.replace(/\s+/g, "");		
				var flags = window.location.search.substring(1);
				var arr = document.getElementById("myFile").value;
				var val = arr.split("\\");
				window.location.href="post_save.php?"+flags+"&mlbrand="+mlbrand+"&mlprice="+mlprice+"&mlyear="+mlyear+"&Cat_id="+data[10]+"&image="+val[2]+"&desc="+desc;
			}
		}
		</script>
		<script>
function myFunction() {
    
}
</script>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	</body>

</html>			