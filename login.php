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
				float: right;
				width: 500px;
				padding-right: 20px;
				margin-right: 20px; 
				border-radius:5px;
			}
			.inlogin
			{
				height:25px; 
				padding-left:10px;
				border-radius:5px;"
			}
			#gap
			{
				background:transparent;
				border:none; 
				color:Red; 
				font-family:Algerian; 
				font-size:25px; 
				height: 50px; 
				width: 150px; 
				border-radius:5px; 
				position:relative; 
				left: 150px; 
				top: 10px;
			}

		</style>
 
	</head>

	<body >

		<img id="background-image" src="images/bg3.jpg" /> 

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
		
						<h1 style="color:Black;">Welcome to<img src="images/logo1.png" class="logo-img"></h1>			
		</div>
		<div>
			<form action="login-script.php" method="POST">
					<div class="login">
						
						<table border="0" align="center" width ="400" style="font-family:georgia;font-size:25px;">
							<tr>
								<td align="right" width="200" height="50" style="color:purple;padding-right:15px;font-weight:bold;">E-mail:</td>
								<td align="left" width="200">
									<input style="font-size:15px" class="inlogin" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="200" height="50" style="font-weight:bold;color:purple;padding-right:15px;">Password:</td>
								<td align="left" width="200">
									<input style="font-size:15px" class="inlogin" size = "25" type="password" name="password" placeholder="Password" required = "true"/>
								</td>
							</tr>
							<tr>
								<td colspan = "15" align="right" style="font-weight:bold;color:black;font-size:15px">
									<input type="submit" name="submit" value = "Login" id="subb">
								</td>
							</tr>
							 <tr>
								<td colspan = "1" align="left" style="padding-left:10px;padding-top:20px">
									<a href="#" style="color:purple;font-family:Calibri;font-size:20px;">Forgot Password</a>
								</td>
								<td colspan = "2" align="right" style="padding-left:10px;padding-top:20px;padding-right:2px;">
									<a style="color:purple;font-family:Calibri;font-size:20px;" class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal4">New User?Register</a> 
								</td>
							</tr>
						</table>
						<br>
						
  					</div>
					</div>
				</form>
  <div>
  
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height:500px; overflow-y: scroll; padding: 5px 5px 5px 5px;">
			<div class="modal-header">
			<h3 class="modal-title">REGISTER</h3>
			<button type="button" class="close" data-dismiss="modal" id="close" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>						
			</div>
				<div class="modal-body">
				    <form action="signup-script.php" method="POST">
					<div style="width:500px; float: left;padding-right:20px; height:300px; border-radius:5px;">
						<table border="0" align="center" width ="400" style="font-family:georgia;font-size:15px;">
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">First Name : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="fname" placeholder="First Name" required = "true" />
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Last Name : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="lname" placeholder="Last name" required = "true" />
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px"> E-mail : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true" value=""/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Password : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px"> Contact : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="contact" placeholder="Ten digit mobile number" required = "true" />
								</td>
							</tr>							
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Address : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="address" placeholder="Address" required = "true"/>
									
								</td>
							</tr>
							<tr>
								<td align="right" width="150" height="50" style="padding-right:5px">Zipcode : </td>
								<td align="left">
									<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="Zipcode" placeholder="Zipcode" required = "true"/>
									
								</td>
							</tr>
						</table>
 		                   <button type="submit" class="btn btn-primary">REGISTER</button>
 		                   <button type="button" class="btn btn-primary" id="close" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>	
			<div>					
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
    	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    </body>
</html>