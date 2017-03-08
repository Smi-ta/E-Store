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
			<div class="row" style="margin-top:80px;">
				<div class="col-lg-4 col-lg-offset-4">
					<table class="table table-striped">
						<thead>
							<tr>
							<th>Item Number</th>
							<th>Price</th>
							<th></th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
			<!-- end of main content -->
		</div>
		<!-- closing the container-fluid div -->
	</body>
</html>