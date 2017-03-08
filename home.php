<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<!-- Adding bootstrap files -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- Adding self created CSS file -->
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<!-- start of navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a class="navbar-brand" href="home.php">E- Store</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
							<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
							<li><a href=""><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end of navbar -->
			<!-- start of main content -->
			<form action="confirm.php" method="get">
				<div class="row" style="margin-top:80px;">
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#1</div>
							</div>
							<div class="panel-body">
								<center><img src="images/e1.gif" alt="Item"/></center>
								<p> 4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
								<a href="" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#2</div>
							</div>
							<div class="panel-body">
								<center><img src="images/e2.jpg" alt="Item"/></center>
								<p>Numeric keypad, 2MP Camera, Internet browsing,<br/>Rs 4000.</p>
								<a href="" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#3</div>
							</div>
							<div class="panel-body">
								<center><img src="images/e3.png" alt="Item"/></center>
								<p>4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs 4000.</p>
								<a href="" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#4</div>
							</div>
							<div class="panel-body">
								<center><img src="images/e4.jpg" alt="Item"/></center>
								<p>3.7' Screen, snap-dragon processor, Android 4.0, 1GB RAM, 4GB Internal memory, Rs 4000</p>
								<a href="" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#5</div>
							</div>
							<div class="panel-body">
								<center><img src="images/e5.jpg" alt="Item"/></center>
								<p>Numeric keypad, 4MP Camera, Internet browsing, SMS/MMS, Rs 4000.</p>
								<a href="" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#6</div>
							</div>
							<div class="panel-body">
								<center><img src="images/e6.jpg" alt="Item"/></center>
								<p>3.2' AMOLED Screen, 1GB RAM, Qual-com processor, 2GB Internal Memory, 5MP camera, Rs 4000</p>
								<a href="" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
							</div>
						</div>
					</div>
				</div>	
				<center><button name="submit" class="btn btn-primary">Buy Now</button></center>
			</form>
			<!-- end of main content -->
		</div>
		<!-- closing the container-fluid div -->
	</body>
</html>