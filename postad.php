<html>

	<head>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
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
			.ban
			{
				margin-left: 50px;
				margin-right: 0px;
			}
			.logo-img
			{
				width:500px;
				height:100px;
			}
			.login
			{
				
				width: 1000px;
				padding-right: 20px;
				margin-left: 50px; 
				border-radius:5px;
			}
			.inlogin
			{
				height:25px; 
				padding-left:10px;
				border-radius:5px;
				width:400px;
			}
			.pics
			{
				margin-left:0px; 
			}
			
		</style>
 
	</head>

	<body >

		<img id="background-image" src="images/article_repo_bgimg.jpg" /> 

		<header class="navbar navbar-default navbar-static-top">
	
			<div class="container">
				<div class="navbar-header">
		      		<form method="GET" action="index.php">
		      			<a href="#">
		      				<h3 style="color:White;clear:both;">Quick Trade,Trade quick</h3>
		      			</a>
		    		</form>

				</div>
				<div class="collapse navbar-collapse" id="navbar-ex-collapse">
		        	<div class="container" style="display: inline-block;">
					</div>
		        </div>
		  	</div>

		</header>
		
		<div class="ban">
		
				<h1 style="color:White;">Welcome to<img src="images/logo.png" class="logo-img"></h1>			
		</div>
		<div>
			 <form action="post-script.php" method="POST" id="form1">
					<div class="login" align="center">							
							<table border="0" align="center" width ="800" style="font-family:georgia;font-size:20px;">
							<tr class="pics">
							   <td align="right" width="300" height="50" style="font-weight:bold;color:white;padding-right:10px;">Select Category:</td> 
							   <td colspan = "2" align="right" style="padding-top:20px;padding-right:2px;">
									<a style="color:purple;font-family:Calibri;font-size:20px;" class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal2"><li class="shadow-box article-brief-box"> 
									<img class="article-brief-img" src="images/imgs/pets.jpg"/>
									<div class="article-brief-content" style="width: 100%;">
									<h3 class='article-brief-title'>PETS</h3></div></li></a> 
								</td>
								<td colspan = "2" align="right" style="padding-top:20px;padding-right:2px;">
									<a style="color:purple;font-family:Calibri;font-size:20px;" class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal1"><li class="shadow-box article-brief-box"> 
									<img class="article-brief-img" src="images/imgs/Altima.jpg"/>
									<div class="article-brief-content" style="width: 100%;">
									<h3 class='article-brief-title'>CAR</h3></div></li></a> 
								</td>
								
								<td colspan = "2" align="right" style="padding-top:20px;padding-right:2px;">
									<a style="color:purple;font-family:Calibri;font-size:20px;" class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal3"><li class="shadow-box article-brief-box"> 
									<img class="article-brief-img" src="images/imgs/Dell.jpg"/>
									<div class="article-brief-content" style="width: 100%;">
									<h3 class='article-brief-title'>MOBILE/LAPTOP</h3></div></li></a> 
								</td>										 
						</table>
						<br>
						
  					</div>
			</div>
				
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height:700px; overflow-y: scroll; padding: 5px 5px 5px 5px;">
			<div class="modal-header">
			<h3 class="modal-title" name="CAR">CAR DETAILS</h3>
			<button type="button" class="close" data-dismiss="modal" id="close" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>						
			</div>
				<div class="modal-body">
				    <form action="post-script.php" method="POST" id="form2">
					<div style="width:500px; float: left;padding-right:20px; height:300px; border-radius:5px;">
						<table border="0" align="center" width ="400" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Title:</td>
								<td align="left">
									<input style="font-size:15px" class="inlogin" size = "25" type="text" name="Title" placeholder="Ad Title" required = "true"/>
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px;">Upload image:</td>
								<td align="left">
									<input style="font-size:15px" class="inlogin" size = "25" type="file" name="image" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Reg No. : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="RegNo" placeholder="Registration Number" required = "true" />
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Model : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="Model" placeholder="Model" required = "true" />
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Odometer : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="Odometer" placeholder="Odometer" required = "true" value=""/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Price : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="number" name="Price" placeholder="Price" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px"> FuelType : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="FuelType" placeholder="Ex: Petrol,Diesel ..." required = "true" />
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Year : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="Year" placeholder="Purchase Year" required = "true" pattern="[0-9]{4}" />
									
								</td>
							</tr>
							<tr>
								<td align="right" width="200" height="50" style="padding-right:5px">Description: </td>
								<td align="left">
									<textarea id="Des" name="Description" placeholder="Enter here.." rows="10" cols="50"></textarea>
								</td>
							</tr>
						</table>
						<br>
 		                   <button style="padding-top: 10px" type="submit" class="btn btn-primary" onclick="javascript:Myfunc();">POST AD</button>
 		                   <button style="padding-top: 10px;padding-left:10px " type="button" class="btn btn-primary" id="close" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
				
			</div>						
	</div>
	</div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height:600px; overflow-y: scroll; padding: 5px 5px 5px 5px;">
			<div class="modal-header">
			<h3 class="modal-title" name="PET">PET DETAILS</h3>
			<button type="button" class="close" data-dismiss="modal" id="close" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>						
			</div>
				<div class="modal-body">
				    <form action="post-script.php" method="POST" id="form2">
					<div style="width:500px; float: left;padding-right:20px; height:300px; border-radius:5px;">
						<table border="0" align="center" width ="400" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Title:</td>
								<td align="left">
									<input style="font-size:15px" class="inlogin" size = "25" type="text" name="Title" placeholder="Ad Title" required = "true"/>
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px;">Upload image:</td>
								<td align="left">
									<input style="font-size:15px" class="inlogin" size = "25" type="file" name="image" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Type : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="Type" placeholder="Ex: Dog,cat" required = "true" />
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Age : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="number" name="Age" placeholder="how many months old?" required = "true"  min="1"/>
									
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Price : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="number" name="PetPrice" placeholder="Price" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="200" height="50" style="padding-right:5px">Description:</td>
								<td align="left">
									<textarea id="Des" name="PetDescription" placeholder="Enter here.." rows=10" cols="50"></textarea>
								</td>
							</tr>
						</table>
						<br>
 		                   <button style="padding-top: 10px" type="submit" class="btn btn-primary" onclick="javascript:Myfunc();">POST AD</button>
 		                   <button style="padding-top: 10px;padding-left:10px " type="button" class="btn btn-primary" id="close" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
				
			</div>						
	</div>
	</div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height:500px; overflow-y: scroll; padding: 5px 5px 5px 5px;">
			<div class="modal-header">
			<h3 class="modal-title">MOBILE/LAPTOP DETAILS</h3>
			<button type="button" class="close" data-dismiss="modal" id="close" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>						
			</div>
				<div class="modal-body">
				    <form action="post-script.php" method="POST" id="form2">
					<div style="width:500px; float: left;padding-right:20px; height:300px; border-radius:5px;">
						<table border="0" align="center" width ="400" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Title:</td>
								<td align="left">
									<input style="font-size:15px" class="inlogin" size = "25" type="text" name="Title" placeholder="Ad Title" required = "true"/>
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px;">Upload image:</td>
								<td align="left">
									<input style="font-size:15px" class="inlogin" size = "25" type="file" name="image" required = "true"/>
								</td>
							</tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Product : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="Product" placeholder="Mobile/Laptop" required = "true" />
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Model : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="MLModel" placeholder="Model" required = "true" />
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Price : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="number" name="MLPrice" placeholder="Price" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Year : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="MLYear" placeholder="Purchase Year" required = "true" pattern="[0-9]{4}" />
									
								</td>
							</tr>
							<tr>
								<td align="right" width="200" height="50" style="padding-right:5px">Description: </td>
								<td align="left">
									<textarea id="Des" name="MLDescription" placeholder="Enter here.." rows="10" cols="50"></textarea>
								</td>
							</tr>
						</table>
						<br>
 		                   <button style="padding-top: 10px" type="submit" class="btn btn-primary" onclick="javascript:Myfunc();">POST AD</button>
 		                   <button style="padding-top: 10px;padding-left:10px " type="button" class="btn btn-primary" id="close" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
				
			</div>						
	</div>
	</div>
</div>
</form>
	<footer class="section section-primary">	
			<div class="container">
        
        		<div class="btn-group btn-group-justified">
        
        			<a class="btn" href="#"></a>
			        <a class="btn" href="#"></a>
				
				</div>
			
			</div>
    
    	</footer>
    	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript">
			function Myfunc()
			{
				document.getElementById("form1").submit();
    			document.getElementById("form2").submit();
			}
		</script>
    </body>
</html>