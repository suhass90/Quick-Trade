<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="utf-8" />
    
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    	<meta name="viewport" content="width=device-width, initial-scale=1" />		
		
		<title>
			Quick Trade - Buy it to Sell it
		</title>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />

		<link rel="icon" href="demo_icon.gif" type="image/gif" />
		
		<!--Styles ORDER IS IMPORTANT-->
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		
		<link rel="stylesheet" type="text/css" href="css/article_home.css" />
	
		<style type="text/css">

		    .bs-example
		    	{
      				margin: 20px;
    			}

    		.filter
    			{
				    width: 850px;
				    padding: 25px;
				    border: 1px solid black;
				    margin: 25px;
				}

			.col 
				{
				   width: 160px;
				   float: left;
				   margin-right: 10px;
				}

			label
				{
    				display: block;
				}

			.div1
				{
    				margin-left: 10px;
    				display: block;
				}

			#background-image
				{
					position: fixed;
					width: 100%;
					height: 100%;
					z-index: -1;
					filter: blur(4px);
					-webkit-filter: blur(4px);
					-moz-filter: blur(4px);
				}
			#button
			    {
     				margin-top: 10px;
     				margin-right: 30px;
     				position:absolute;
     				top:100;
     				right:0;
     				width:100px;
     				color: White;
     				background-color: transparent;
     				border-color: transparent;
     				font-size: 24px;
     				font-family: Algerian;
     				font-style:normal;
     				font-weight: bold;
			    }
			   #myads
			   {
     				margin-top: 10px;
     				margin-right: 100px;
     				float: right;
     				position:relative;
     				top:100;
     				right:50;
     				width:100px;
     				color: White;
     				background-color: transparent;
     				border-color: transparent;
     				font-size: 24px;
     				font-family: Algerian;
     				font-style:normal;
     				font-weight: bold;
			   }
			   #namewel
			   {
     				margin-top: 15px;
     				margin-right:10px;
     				position:relative;
     				float:right;
     				top:150;
     				right:0;
     				width:225px;
     				color: White;
     				background-color: transparent;
     				border-color: transparent;
     				font-size: 22px;
     				font-family: Algerian;
     				font-style:normal;
     				font-weight: bold;	
			   }
			   .filter-option
			   {
			   	color: white;
			   }
			   .filter-group
			   {
			   	color: white;
			   }
			   #post
			   {
     				margin-top: 10px;
     				margin-right: 100px;
     				float: right;
     				position:relative;
     				top:100;
     				right:50;
     				width:300px;
     				color: White;
     				background-color: #FE5A1D;
     				border-color: transparent;
     				font-size: 24px;
     				font-family: Algerian;
     				font-style:normal;
     				font-weight: bold;
			   }
			   
		</style>

		<?php

			error_reporting(0);

	       	$dbhost = 'localhost';
	       	$dbuser = 'u763220561_admin';
	       	$dbpass = 'Admin123';
	       
	       	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	       
	       	if(! $conn )
	        	{
	          		die('Could not connect: ' . mysqli_error());
	        	}

	      	$temparr = array();

	      	$flag = 0;
	      	$a = 0;

	      	$xdata = array(array());
			$xdata[0][4]=0;
	       //normal home page displaying mix
					$a=0;
					$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	     			$fn = $arr[1];
                                //$fn = $_SESSION['Fname'];  
	     			$postarray = array();
	     			$postarray[0] = $id;
	     			$postarray[1] = $fn;
	     			fclose($f);
	     			$sql = "SELECT Ad_Id,Photo_id,Description,Title FROM advertisement WHERE User_id<>\"$id\"" ;
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );	
	       			while ($row = mysqli_fetch_array($retval, 1))
	       				{

					       	$xdata[$a][0] = $row['Title'];
					       	$xdata[$a][1] = $row['Description'];
					       	$x = $row['Photo_id'];
					   	   	$sql1 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval1 = mysqli_query( $conn, $sql1 );
	       				   $row1 = mysqli_fetch_array($retval1, 1);
	       				   $xdata[$a][2] = $row1['Primary_photo'];
	       				   $xdata[$a][3] = $row['Ad_Id'];
					       	$a++;
		
	     				}
	        //echo "<script>alert('$id')</script>";
	     		if(isset($_GET["myads"])=="MyAds")
	     		{
	     			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	     			$fn = $arr[1];
	     			fclose($f);
	     			$xdata = array(array());
					$a=0;
	     			$sql = "SELECT Ad_Id,Photo_id,Description,Title FROM advertisement WHERE User_id=\"$id\"" ;
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
					//if (mysql_num_rows($$retval)==0)
						
	       			while ($row = mysqli_fetch_array($retval, 1))
	       				{
							
					       	$xdata[$a][0] = $row['Title'];
					       	$xdata[$a][1] = $row['Description'];
					       	$x = $row['Photo_id'];
					   	   	$sql1 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval1 = mysqli_query( $conn, $sql1 );
	       				   $row1 = mysqli_fetch_array($retval1, 1);
	       				   $xdata[$a][2] = $row1['Primary_photo'];
	       				   $xdata[$a][3] = $row['Ad_Id'];
					       	$a++;
		
	     				}
				$xdata[0][4]=1;
				$xdata[1][4]=1;//to hide the welcome msg
	     		}	
	     		else
	     		{
	     			$fn = $_GET['fname'];
                                //$fn = $_SESSION['Fname'];
	     			$id = $_GET['id'];
	     			//echo "<script>alert('$id')</script>";
	     			if((!isset($_GET['order']))&&(!isset($_GET['Array1']))&&(!isset($_GET['Array2']))&&(!isset($_GET['from'])) && (!isset($_GET['pto']))&&(!isset($_GET['pfrom'])) && (!isset($_GET['to'])) && (!($_GET['f'] == '1')))
	     		 {
	     			$f = fopen("a.txt","w");
	     			$x = $id;
	     			fwrite($f,$x); 
	     			fwrite($f,'|');
	     			fwrite($f,$fn);
	     		 }
	     			fclose($f);
                                $xdata[0][4]=0;
	     		}

    		//code for cars
    			
    		if(isset($_GET["order"]))
    		{
    				if($_GET["order"]=="Cars")
    			{
    				$f1 = fopen("b.txt","w");
    				fwrite($f1,"cars");
    				fclose($f1);
    				$xdata = array(array());
    				$sql = "SELECT Ad_id FROM cars" ;
	       			$p = 0;
	       			$a=0;
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   
	       			   	$val = $row['Ad_id'];
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   $sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
							
					       	$a++;
	     				}					   
	     			}
	     		}
	     		fclose($f);
                        $xdata[0][4]=0;
	     	}	

	      
    		//code for pets
    			
    		if(isset($_GET["order"]))
    		{
    				if($_GET["order"]=="Pets")
    			{
    				$f1 = fopen("b.txt","w");
    				fwrite($f1,"pets");
    				fclose($f1);
    				$xdata = array(array());
    				$sql = "SELECT Ad_id FROM pets" ;
	       			$p = 0;
	       			$a=0;
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   	
	       			   	$val = $row['Ad_id'];
	    			$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   $sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		}
	     		fclose($f);
                        $xdata[0][4]=0;
	     	}

	     	//code for Mobile

	     	if(isset($_GET["order"]))
    		{
    				if($_GET["order"]=="Mobile")
    			{
    				$f1 = fopen("b.txt","w");
    				fwrite($f1,"mobile");
    				fclose($f1);
    				$xdata = array(array());
    				$sql = "SELECT Ad_id FROM mobile_laptop where Product = \"Mobile\"" ;
	       			$p = 0;
	       			$a=0;
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   	
	       			   	$val = $row['Ad_id'];
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   $sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		}
	     		fclose($f);
                        $xdata[0][4]=0;
	     	}

	     	//code for Laptop

	     	if(isset($_GET["order"]))
    		{
    				if($_GET["order"]=="Laptop")
    			{
    				$f1 = fopen("b.txt","w");
    				fwrite($f1,"laptop");
    				fclose($f1);
    				$xdata = array(array());
    				$sql = "SELECT Ad_id FROM mobile_laptop WHERE Product = \"Laptop\"" ;
	       			$p = 0;
	       			$a=0;
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   	
	       			   	$val = $row['Ad_id'];
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   $sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		}
	     		fclose($f);
                        $xdata[0][4]=0;
	     	}	

	     // code for filters
	     
	     	$f1 = fopen("b.txt","r");
    		$var = fgets($f1);
	       	if($var == "cars")
	     	{
	     		$Array1 = array();
	       		$t = 0;
	       		$Array1[0] = "cars";
	       		++$t;
	       		$sql = "SELECT DISTINCT FuelType FROM cars" ;
	       		mysqli_select_db($conn,'u763220561_qtms');
	       		$retval = mysqli_query( $conn, $sql );
	       
	       		while ($row = mysqli_fetch_array($retval,1))
	       		{
	    			$Array1[$t]=$row['FuelType'];
					//echo "<script>alert('FuelType $Array1[$t]')</script>";
	    			$t++;
    			}
    			
    			$Array2 = array();
	       		$p = 0;
	       		$Array2[0] = "cars";
	       		++$p;
	       		$sql = "SELECT DISTINCT Model FROM cars" ;
	       		mysqli_select_db($conn,'u763220561_qtms');
	       		$retval = mysqli_query( $conn, $sql );
	       
	       		while ($row = mysqli_fetch_array($retval,1))
	       		{
    				$Array2[$p]=$row['Model'];
    				$p++;
    			}
                $xdata[0][4]=0;
	     	}
	     	

	    if($var == "pets")
    		{
	     		$Array2 = array();
	       		$p = 0;
	       		$Array2[0] = "pets";
	       		++$p;
	       		$sql = "SELECT DISTINCT Type FROM pets" ;
	       		mysqli_select_db($conn,'u763220561_qtms');
	       		$retval = mysqli_query( $conn, $sql );
	       
	       		while ($row = mysqli_fetch_array($retval,1))
	       		{
    				$Array2[$p]=$row['Type'];
    				$p++;
    			}
                $xdata[0][4]=0;
    		}
    	

    	if($var == "mobile")
    		{
    			$Array2 = array();
	       		$p = 0;
	       		$Array2[0] = "mobile";
	       		++$p;
	       		$sql = "SELECT DISTINCT Brand FROM mobile_laptop where Product = \"Mobile\"";
	       		mysqli_select_db($conn,'u763220561_qtms');
	       		$retval = mysqli_query( $conn, $sql );
	       
	       		while ($row = mysqli_fetch_array($retval,1))
	       		{
    				$Array2[$p]=$row['Brand'];
    				$p++;
    			}
                $xdata[0][4]=0;
    		}

    	if($var == "laptop")
    		{
	     		$Array2 = array();
	       		$p = 0;
	       		$Array2[0] = "laptop";
	       		++$p;
	       		$sql = "SELECT DISTINCT Brand FROM mobile_laptop where Product = \"Laptop\"" ;
	       		mysqli_select_db($conn,'u763220561_qtms');
	       		$retval = mysqli_query( $conn, $sql );
	       
	       		while ($row = mysqli_fetch_array($retval,1))
	       		{
    				$Array2[$p]=$row['Brand'];
    				$p++;
    			}
                $xdata[0][4]=0;
    		}
    	
		// code when checkbox is clicked

    		$f1 = fopen("b.txt","r");
    		$var = fgets($f1);
			
    		if($var == "cars")
    		{
    			$pflag=0;//price
				$yflag=0;//year
				$bflag=0;//brand
    			if(isset($_GET['from']) && isset($_GET['to']))
				{
					$year = $_GET['from'];
					$yearend = $_GET['to'];
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					if($year != '' && $yearend != '')
					{
						$xdata = array(array());
						$yflag=1;
						
						if($pfrom == '' && $pto == '')
							$sql = "SELECT Ad_id FROM cars where year between \"$year\" and \"$yearend\"";
						else
							$sql = "SELECT Ad_id FROM cars where year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                $xdata[0][4]=0;
				}
				if(isset($_GET['pfrom']) && isset($_GET['pfrom']))
				{
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					$year = $_GET['from'];
					$yearend = $_GET['to'];
						
					if($pfrom != '' && $pto != '')
					{
						$xdata = array(array());
						$pflag=1;
						
						if($year == '' && $yearend == '')
							$sql = "SELECT Ad_id FROM cars where Price between \"$pfrom\" and \"$pto\"";
						else
							$sql = "SELECT Ad_id FROM cars where year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                $xdata[0][4]=0;  
				}    			

    			if(isset($_GET['Array2']))
    			{
    			  $xdata = array(array());
				  $bflag=1;
    			  $brand = $_GET['Array2'];
				  $a=0;
    			  foreach ($brand as $b) 
    			  {
    			  	//var_dump($b);
					
					if($yflag==0 && $pflag==0)
						$sql = "SELECT Ad_id FROM cars where Model = \"$b\"";
					else if($yflag==1 && $pflag==0)
						$sql = "SELECT Ad_id FROM cars where Model = \"$b\" and year between \"$year\" and \"$yearend\"";
					else if($yflag==0 && $pflag==1)
						$sql = "SELECT Ad_id FROM cars where Model = \"$b\" and price between \"$pfrom\" and \"$pto\"";	
					else
						$sql = "SELECT Ad_id FROM cars where Model = \"$b\" and price between \"$pfrom\" and \"$pto\" and year between \"$year\" and \"$yearend\"";
    			  	$p = 0;
	       			
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       				//var_dump($row);
	       				//var_dump($id);
	       			   	$val = $row['Ad_id'];
	       			   	//var_dump($val);
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
	       					//var_dump($row1);
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   		$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}
	     				
	     			}
	     			//var_dump($xdata);
	     		  }
	     				fclose($f);
                                        $xdata[0][4]=0;
	     		}	
	     		if(isset($_GET['Array1']))
	     		{
	     			$xdata = array(array());
	     			$FuelType = $_GET['Array1'];
					$a=0;
    			  foreach ($FuelType as $ft) 
    			  {
    			  	//var_dump($ft);
					
					if($yflag==0 && $pflag==0 && $bflag==0)
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\"";
					else if($yflag==0 && $pflag==0 && $bflag==1)
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and Model in (\"$brand[0]\",\"$brand[1]\")";
					else if($yflag==0 && $pflag==1 && $bflag==0)
					{
						
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and price between \"$pfrom\" and \"$pto\"";
					}
					else if($yflag==0 && $pflag==1 && $bflag==1)
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and price between \"$pfrom\" and \"$pto\" and model in (\"$brand[0]\",\"$brand[1]\")";
					else if($yflag==1 && $pflag==0 && $bflag==0)
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and year between \"$year\" and \"$yearend\"";
					else if($yflag==1 && $pflag==0 && $bflag==1)
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and year between \"$year\" and \"$yearend\" and model in (\"$brand[0]\",\"$brand[1]\")";
					else if($yflag==1 && $pflag==1 && $bflag==0)
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
					else 
						$sql = "SELECT Ad_id FROM cars where FuelType = \"$ft\" and year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\" and model in (\"$brand[0]\",\"$brand[1]\")";
					//else if ($yflag==0 && $pflag==1 && $bflag==0)
    			  	$p = 0;
	       			
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   
	       			   	$val = $row['Ad_id'];
						
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   		$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		  }
	     				fclose($f);
                                        $xdata[0][4]=0;
	     		}
    		}
    		if($var == "pets")
    		{
    			$pflag=0;//price
				$yflag=0;//year
				if(isset($_GET['from']) && isset($_GET['to']))
				{
					$year = $_GET['from'];
					$yearend = $_GET['to'];
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					if($year != '' && $yearend != '')
					{
						$yflag=1;
						$xdata = array(array());
						
						if($pfrom == '' && $pto == '')
							$sql = "SELECT Ad_id FROM pets where Age between \"$year\" and \"$yearend\"";
						else
							$sql = "SELECT Ad_id FROM pets where Age between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
                                                $xdata[0][4]=0;
					}
				}
				if(isset($_GET['pfrom']) && isset($_GET['pfrom']))
				{
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					$year = $_GET['from'];
					$yearend = $_GET['to'];
						
					if($pfrom != '' && $pto != '')
					{
						$pflag=1;
						$xdata = array(array());
						
						if($year == '' && $yearend == '')
							$sql = "SELECT Ad_id FROM pets where Price between \"$pfrom\" and \"$pto\"";
						else
							$sql = "SELECT Ad_id FROM pets where Age between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                        $xdata[0][4]=0;
				} 

    			if(isset($_GET['Array2']))
    			{
    				$xdata = array(array());
    			  $brand = $_GET['Array2'];
				  $a=0;
    			  foreach ($brand as $b) {
					if($pflag==0 && $yflag==0)					
						$sql = "SELECT Ad_id FROM pets where Type = \"$b\"";
					else if($pflag==0 && $yflag==1)
						$sql = "SELECT Ad_id FROM pets where Type = \"$b\" and Age between \"$year\" and \"$yearend\"";
					else if($pflag==1 && $yflag==0)
						$sql = "SELECT Ad_id FROM pets where Type = \"$b\" and Price between \"$pfrom\" and \"$pto\"";
					else
						$sql = "SELECT Ad_id FROM pets where Type = \"$b\" and Price between \"$pfrom\" and \"$pto\" and Age between \"$year\" and \"$yearend\"";
    			  	$p = 0;
	       			
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   
	       			   	$val = $row['Ad_id'];
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   		$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		  }
	     				fclose($f);
                                        $xdata[0][4]=0; 
	     		}	
    		}
    		if($var == "mobile")
    		{
    			$yflag=0;
				$pflag=0;
				if(isset($_GET['from']) && isset($_GET['to']))
				{
					$year = $_GET['from'];
					$yearend = $_GET['to'];
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					if($year != '' && $yearend != '')
					{
						$yflag=1;
						$xdata = array(array());
						
						if($pfrom == '' && $pto == '')
							$sql = "SELECT Ad_id FROM mobile_laptop where product='Mobile' and year between \"$year\" and \"$yearend\"";
						else
							$sql = "SELECT Ad_id FROM pets where product='Mobile' and year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                        $xdata[0][4]=0;
				}
				if(isset($_GET['pfrom']) && isset($_GET['pfrom']))
				{
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					$year = $_GET['from'];
					$yearend = $_GET['to'];
						
					if($pfrom != '' && $pto != '')
					{
						$pflag=1;
						$xdata = array(array());
						
						if($year == '' && $yearend == '')
							$sql = "SELECT Ad_id FROM mobile_laptop where product='Mobile' and Price between \"$pfrom\" and \"$pto\"";
						else
							$sql = "SELECT Ad_id FROM mobile_laptop where product='Mobile' and year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                        $xdata[0][4]=0;   
				}  

    			if(isset($_GET['Array2']))
    			{
    			  $xdata = array(array());
    			  $brand = $_GET['Array2'];
				  $a=0;
    			  foreach ($brand as $b) {
					if($pflag==0 && $yflag==0)
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Mobile\"";
					else if($pflag==0 && $yflag==1)
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Mobile\" and year between \"$year\" and \"$yearend\"";
					else if($pflag==1 && $yflag==0)
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Mobile\" and Price between \"$pfrom\" and \"$pto\"";
					else
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Mobile\" and Price between \"$pfrom\" and \"$pto\" and year between \"$year\" and \"$yearend\"";
    			  	$p = 0;
	       			
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   
	       			   	$val = $row['Ad_id'];
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   		$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		  }
	     				fclose($f);
                                        $xdata[0][4]=0; 
	     		}	
    		}
    		if($var == "laptop")
    		{
    			$yflag=0;
				$pflag=0;
				if(isset($_GET['from']) && isset($_GET['to']))
				{
					$year = $_GET['from'];
					$yearend = $_GET['to'];
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					if($year != '' && $yearend != '')
					{
						$yflag=1;
						$xdata = array(array());
						
						if($pfrom == '' && $pto == '')
							$sql = "SELECT Ad_id FROM mobile_laptop where product='Laptop' and year between \"$year\" and \"$yearend\"";
						else
							$sql = "SELECT Ad_id FROM pets where product='Laptop' and year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                        $xdata[0][4]=0;
				}
				if(isset($_GET['pfrom']) && isset($_GET['pfrom']))
				{
					$pfrom = $_GET['pfrom'];
					$pto = $_GET['pto'];
					$year = $_GET['from'];
					$yearend = $_GET['to'];
						
					if($pfrom != '' && $pto != '')
					{
						$pflag=1;
						$xdata = array(array());
						
						if($year == '' && $yearend == '')
							$sql = "SELECT Ad_id FROM mobile_laptop where product='Laptop' and Price between \"$pfrom\" and \"$pto\"";
						else
							$sql = "SELECT Ad_id FROM mobile_laptop where product='Laptop' and year between \"$year\" and \"$yearend\" and price between \"$pfrom\" and \"$pto\"";
						$p = 0;
						$a=0;
						$f = fopen("a.txt","r");
						$s = fgets($f);
						$arr = explode("|", $s); 
						$id = $arr[0];
						
						mysqli_select_db($conn,'u763220561_qtms');
						$retval = mysqli_query( $conn, $sql );
						   while ($row = mysqli_fetch_array($retval, 1))
						{
							//var_dump($row);
							//var_dump($id);
							$val = $row['Ad_id'];
							
							//var_dump($val);
							$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
							mysqli_select_db($conn,'u763220561_qtms');
							$retval1 = mysqli_query( $conn, $sql1 );
							while ($row1 = mysqli_fetch_array($retval1, 1))
							{
								//var_dump($row1);
								$h=$row1['Title'];
								
								$xdata[$a][0] = $row1['Title'];
								$xdata[$a][1] = $row1['Description'];
								$x = $row1['Photo_id'];
								//echo $x;
								$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
							   mysqli_select_db($conn,'u763220561_qtms');
							   $retval2 = mysqli_query( $conn, $sql2 );
							   while ($row2 = mysqli_fetch_array($retval2, 1))
								$xdata[$a][2] = $row2['Primary_photo'];
								$xdata[$a][3] = $val;
								$a++;
							}
							
						}
					}
                                        $xdata[0][4]=0;
				} 

    			if(isset($_GET['Array2']))
    			{
    				$xdata = array(array());
    			  $brand = $_GET['Array2'];
				  $a=0;
    			  foreach ($brand as $b) {
    			  	if($pflag==0 && $yflag==0)
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Laptop\"";
					else if($pflag==0 && $yflag==1)
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Laptop\" and year between \"$year\" and \"$yearend\"";
					else if($pflag==1 && $yflag==0)
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Laptop\" and Price between \"$pfrom\" and \"$pto\"";
					else
						$sql = "SELECT Ad_id FROM mobile_laptop where Brand = \"$b\" AND Product=\"Laptop\" and Price between \"$pfrom\" and \"$pto\" and year between \"$year\" and \"$yearend\"";
    			  	$p = 0;
	       			
	       			$f = fopen("a.txt","r");
	     			$s = fgets($f);
	     			$arr = explode("|", $s); 
	     			$id = $arr[0];
	       			mysqli_select_db($conn,'u763220561_qtms');
	       			$retval = mysqli_query( $conn, $sql );
	       			   while ($row = mysqli_fetch_array($retval, 1))
	       			{
	       			   
	       			   	$val = $row['Ad_id'];
	    				$sql1 = "SELECT Photo_id,Description,Title FROM advertisement WHERE Ad_Id=\"$val\" AND User_id<>\"$id\"" ;
	       			    mysqli_select_db($conn,'u763220561_qtms');
	       			    $retval1 = mysqli_query( $conn, $sql1 );
	       			    while ($row1 = mysqli_fetch_array($retval1, 1))
	       				{
					       	$xdata[$a][0] = $row1['Title'];
					       	$xdata[$a][1] = $row1['Description'];
					       	$x = $row1['Photo_id'];
					       	//echo $x;
					   		$sql2 = "SELECT Primary_photo FROM photo WHERE Photo_id = \"$x\"";
					       mysqli_select_db($conn,'u763220561_qtms');
	       				   $retval2 = mysqli_query( $conn, $sql2 );
	       				   while ($row2 = mysqli_fetch_array($retval2, 1))
	       				    $xdata[$a][2] = $row2['Primary_photo'];
	       				    $xdata[$a][3] = $val;
					       	$a++;
	     				}					   
	     			}
	     		  }
	     				fclose($f);
                                        $xdata[0][4]=0;
	     		}	
    		}
	    ?>

	</head>

	<body onload="displayPageNav(page);showArticles(page);">

		<img id="background-image" src="images/article_repo_bgimg.jpg" /> 

		<header class="navbar navbar-default navbar-static-top">
	
			<div class="container">
				<div class="navbar-header">
		      		<form method="GET" action="Index.php">
		      			<a href="http://tradeqwick.esy.es/Index.php" id="home">
		      				<h3 style="color:White;clear:both;">Quick Trade,Trade quick</h3>
		      			</a>
		    		</form>

				</div>
				<div >
				<form method="GET" action="Index.php">
			    <button id="myads" name="myads" value="8" onclick="javascript: myfunc()">MyAds</button>
                <input type="button" id="button" name="logout" value="Logout" onclick="sendBye()">
                <div id="namewel">
				</div>
                </form>
                </div>
		        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
		        	<div class="container" style="display: inline-block;">
					</div>
		        </div>
		  	</div>

		</header>
		<div>
		<button id="post" name="post" value="post" onclick="javascript: Post()">Post Ad !</button>
		</div>
		<div id ="welcome" class="banner">
		  
			<div class="row">
		
				<div class="col-md-12">
		
					<div class="banner-msg">
						<div id='wel'>
							<h1 class="Welcome" >
								Welcome to <img src="images/logo.png" class="banner-logo">
							</h1>
						</div>
						</br></br></br>
						<div>
							<h1 id='browse' class="Welcome"> Browse our Ads</h1>
						</div>
					</div>
				
				</div>
			
			</div>
		
		</div>
		
		<div  class="section">
      		
      		<div class="container">
        
        		<div class="row">
          
          			<div class="col-lg-3 col-md-3 col-sm-4 col-lg-10" role="filters" id="filters">
						
						<div style="background-color:transparent;color:white;" class="shadow-box filter-box">	
							
							<form method="GET" action="Index.php">
							
								<h3 style="color:white;">Filters</h3>
							
								<hr />
							
								<ul class="filter-group">
								
									<h4 style="color:white;">Category</h4>
									
									<li>
									
										<label>
											<input type="radio" class="filter-option" name="order" onclick="javascript:submit()" value="Cars">Cars</input>
										</label>
									
									</li>
									
									<li>
									
										<label>
										<input type="radio" class="filter-option" name="order" onclick="javascript: submit()" value="Mobile">Mobile</input>
										</label>
										<label>
										<input type="radio" class="filter-option" name="order" onclick="javascript: submit()" value="Laptop">Laptop</input>
										</label>


									</li>
									<li>
									
										<label>
										<input type="radio" class="filter-option" name="order" onclick="javascript: submit()" value="Pets">Pets</input>
										</label>

									</li>
							</form>
							
							</ul>

							<form method="GET" action="Index.php" style="color:white;">

								<ul class="filter-group" id="Price">
									  <h4 style="color:white;">Price</h4>
									  <br>
                                      <input style="color:black;" type = "number" name="pfrom" id="from" placeholder="start-from" />
                                      <br>To<br>
                                      <input style="color:black;" type="number" name="pto" id="to" width="50" placeholder="end-to" />
								</ul>
								<br>
								<ul class="filter-group" id="Year">
									<h4 id ="head" style="color:white;">Year</h4>
									<br>
									<input style="color:black;" type = "number" name="from" id="from" placeholder="from" />
                                	<br>To<br>
                                	<input style="color:black;" type="number" name="to" id="to" width="50" placeholder="to" />						
								</ul>
								<br>
								<ul style="color:white" class="filter-group" id="Brand">
								</ul>
								<br>
								<ul style="color:white" class="filter-group" id="FuelType">
								</ul>

								<input style="background-color: transparent;font-weight: bold;font-size:15px;" type="submit" name="submit" value="Submit">
							
							</form>
						
						</div>
          
          			</div>
					
          			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						
						<div style="background-color:transparent;color:white;" class=" shadow-box">
							
							<ul class="article-list" id="dynamic_article_boxes">
						
							</ul>

							<div class="page-nav">
								
								<ul class="pagination" id="dynamic_page_nav">

								</ul>

							</div>
					
						</div>

					</div>
					
          		</div>
        
        	</div>
      
      	</div>
    
    	<footer class="section section-primary">
		
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
		
			var data =<?php echo json_encode($xdata); ?> ;

                        var pdata =<?php echo json_encode($postarray); ?> ;

			var page = 1;

			var number_of_articles = data.length;
		
			var number_of_pages = parseInt((number_of_articles/6) + 1);	

			var my_adflag;
			function displayPageNav(page)
				{
					if (number_of_articles)
						{
							if (number_of_pages <= 3)
								{
									var temp = document.getElementById("dynamic_page_nav");	
									temp.innerHTML ="";
									for (i=1; i <= number_of_pages; i++)
										{
											if (i == page)
											{
												temp.innerHTML += "<li class='active'><a onClick='displayPageNav("+i+");showArticles("+i+");'>"+i+"</a></li>";
												continue;
											}

											temp.innerHTML += "<li><a onClick='displayPageNav("+i+");showArticles("+i+");'>"+i+"</a></li>";
										}
								}
							else
								{			
									var temp = document.getElementById("dynamic_page_nav");
									temp.innerHTML = "";
									temp.innerHTML += "<li class='first'><a onClick='FirstPage();'>First</a></li>";
									temp.innerHTML += "<li class='previous'><a onClick='PrevPage();'>Previous</a></li>";

									
									if (page <= number_of_pages-2)
										{
											start = page;
											end = page+2;
										}
									else
									if (page == number_of_pages-1)
										{
											start = page-1;
											end = page+1;
										}
									else
									if (page == number_of_pages)
										{
											start = page-2;
											end = page;
										}

									for (i = start; i <= end; i++)
										{
											if (i == page)
											{
												temp.innerHTML += "<li class='active'><a onClick='displayPageNav("+i+");showArticles("+i+");'>"+i+"</a></li>";
												continue;
											}

											temp.innerHTML += "<li><a onClick='displayPageNav("+i+");showArticles("+i+");'>"+i+"</a></li>";
										}

									temp.innerHTML += "<li class='next'><a onClick='NextPage();'>Next</a></li>";
									temp.innerHTML += "<li class='last'><a onClick='LastPage();'>Last</a></li>";			
								}
						}
				}
			function myfunc()
			{
				
				document.getElementById('wel').innerHTML= ' ';
				document.getElementById('browse').innerHTML= "Your Ads";
				//submit();
			}
			function showArticles(page)
				{
					var temp = document.getElementById("dynamic_article_boxes");
				    temp.innerHTML = "";
                                    var link = document.getElementById("home");					
                                       link.href+='?fname='+pdata[1]+'&id='+pdata[0]+'&f='+1;
					for (i = ((page-1)*6) + 0, k = 0; ((i < number_of_articles) && (k < 6)); i++, k++)
						{
							var temp_content = "";

							for (j = 0; ((j < 175) && (j < data[i][1].length)); j++)
								{
									if (data[i][1][j] == '\n')
									{
										temp_content += "<br />";
										continue;
									}
									temp_content += data[i][1][j];
								}
							temp_content += "...";
								var temp_div = "<a href='ad_page.php?id="+data[i][3]+"&flag="+data[0][4]+"&r="+0+"'><li class='shadow-box article-brief-box'> \
													<img class='article-brief-img' src='images/imgs/"+data[i][2]+"'> \
													<div class='article-brief-content' style='width: 100%;'> \
														<h3 class='article-brief-title'>" +
															data[i][0] + 
											"			</h3> \
														<div class='article-brief-paragraph'> \
															<p> " +
																temp_content +
											"				</p> \
														</div> \
														<div class='article-brief-readmore'> \
															<h4><a href='ad_page.php?id="+data[i][3]+"&flag="+data[0][4]+"&r="+0+"'>Read more</a></h4> \
														</div> \
													</div> \
												</li></a>";
								 
								temp.innerHTML += temp_div;
								
								
						}
						if (data[1][4]==1)
						{
							document.getElementById('wel').innerHTML= ' ';
							document.getElementById('browse').innerHTML=' ';
							document.getElementById('browse').innerHTML+= 'Your Ads';
						}
				}

			function NextPage()
				{
					if (page != number_of_pages)
						page++;
					displayPageNav(page);
					showArticles(page);
				}

			function PrevPage()
				{
					if (page != 1)
						page--;
					displayPageNav(page);
					showArticles(page);
				}

			function FirstPage()
				{
					page = 1;
					displayPageNav(page);
					showArticles(page);
				}

			function LastPage()
				{
					page = number_of_pages;
					displayPageNav(page);
					showArticles(page);
				}

		</script>
		<!-- Code for logout to redirect to login -->
		<script>
		function sendBye()
		{
			alert("Thank You,press ok to proceed to login page");
			window.location.href = "login.php"; 
		}
		
		</script>

		<!-- code for printing user name on home page-->
		<script>
		var fname = document.getElementById("namewel");
		var name = '<?php echo $fn;?>';
		fname.innerHTML = "Welcome " + name + " !!" ;
        </script>
        <!-- code for navigating to postad page -->
        <script type="text/javascript">
        	function Post()
        	{
        		var data = <?php echo json_encode($postarray) ?>;
        		var id = data[0];
        		var name = data[1];
        		window.location.href = "postad.php?id="+data[0]+"&fname="+data[1];
        	}
        </script>

        <!-- code for getting the filters for seperate categories -->

       	<script type="text/javascript">

		var domaindata = <?php echo json_encode($Array2) ?>;
		number_of_domainnames = domaindata.length;
		if(domaindata[0]=="cars")
		{
			if (number_of_domainnames <= 5)
				{
					list_domainnames_main = document.getElementById("Brand");
					list_domainnames_main.innerHTML = "<h4 style='color:white'>Brand</h4>";
					
					temp_append = "";
					
					for (a=1; a<number_of_domainnames; a++)
						{
							temp_append += "<li><label class='filter-option'> \
											<input type='checkbox' name='Array2[]' value='"+domaindata[a]+"'>"+domaindata[a]+"</input> \
											</label></li>";
						}
					
					list_domainnames_main.innerHTML += temp_append;
				}

			var npodata = <?php echo json_encode($Array1) ?>;
			number_of_nponames = npodata.length;
			
			if (number_of_nponames <= 4)
				{
					list_nponames_main = document.getElementById("FuelType");
					list_nponames_main.innerHTML = "<h4 style='color:white'>FuelType</h4>";
					
					temp_append = "";
					
					for (a=1; a<number_of_nponames; a++)
						{
							temp_append += "<li><label class='filter-option'> \
											<input type='checkbox' name='Array1[]' value='"+npodata[a]+"'>"+npodata[a]+"</input> \
											</label></li>";
						}
					
					list_nponames_main.innerHTML += temp_append;
				}
		}

		else if(domaindata[0]=="pets")
		{
			if (number_of_domainnames <= 5)
				{
					list_domainnames_main = document.getElementById("Brand");
					list_domainnames_main.innerHTML = "<h4 style='color:white'>Type</h4>";
					
					temp_append = "";
					
					for (a=1; a<number_of_domainnames; a++)
						{
							temp_append += "<li><label class='filter-option'> \
											<input type='checkbox' name='Array2[]' value='"+domaindata[a]+"'>"+domaindata[a]+"</input> \
											</label></li>";
						}
					
					list_domainnames_main.innerHTML += temp_append;
				}

					list_nponames_main = document.getElementById("FuelType");
					list_nponames_main.innerHTML = "";
					list_nponames_main = document.getElementById("head");
					list_nponames_main.innerHTML = "<h4 style='color:white'>Age</h4>";

		}

	    else if(domaindata[0]=="mobile")
		{
			if (number_of_domainnames <= 5)
				{
					list_domainnames_main = document.getElementById("Brand");
					list_domainnames_main.innerHTML = "<h4 style='color:white'>Brand</h4>";
					
					temp_append = "";
					
					for (a=1; a<number_of_domainnames; a++)
						{
							temp_append += "<li><label class='filter-option'> \
											<input type='checkbox' name='Array2[]' value='"+domaindata[a]+"'>"+domaindata[a]+"</input> \
											</label></li>";
						}
					
					list_domainnames_main.innerHTML += temp_append;
				}

					list_nponames_main = document.getElementById("FuelType");
					list_nponames_main.innerHTML = "";
					
		}

	    else if(domaindata[0]=="laptop")
		{
			if (number_of_domainnames <= 5)
				{
					list_domainnames_main = document.getElementById("Brand");
					list_domainnames_main.innerHTML = "<h4 style='color:white'>Brand</h4>";
					
					temp_append = "";
					
					for (a=1; a<number_of_domainnames; a++)
						{
							temp_append += "<li><label class='filter-option'> \
											<input type='checkbox' name='Array2[]' value='"+domaindata[a]+"'>"+domaindata[a]+"</input> \
											</label></li>";
						}
					
					list_domainnames_main.innerHTML += temp_append;
				}

					list_nponames_main = document.getElementById("FuelType");
					list_nponames_main.innerHTML = "";		
		}			
		</script>
 
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	</body>

</html>			