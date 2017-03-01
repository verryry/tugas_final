<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="tampilan/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<style>
	.color {
		color: green;
	}
	a:hover {
		color: blue;
	}
	#logout {
		padding-right: 20px;
	}

.nav {
	height: 50px;
	width: 99%;
}
.nav-tabs {
	padding-top: 3px;
}

	</style>
</head>
<body>

	<ul class="nav nav-tabs">
	    <li><a class="color" data-toggle="tab" href="index.php">Home</a></li>
	    <li class="navbar-right"><a class="color" data-toggle="tab" href="daftar.php">Sign Up</a></li>
			<li class="navbar-right" id="logout"><a class="color" href="login.php">Sign In</a></li>
	</ul>

		<br>
</body>
</html>
