<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Wekcome 4loop page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Chenla' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Happy Monkey' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Inknut Antiqua' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
<?php
if(count($_SESSION)< 1){
    header("Location: index.php");
    exit();
}
?>
	<div class="header">
		<div class="content">
			<div id="top">
				<h4 class="logo">
					<p>4<span>loop</span></p>
				</h4>
				<div class="topnav" id="myTopnav">
					<a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="27ae871485bd2d715651b14a5d6bc283.png" style="width: 30px;">
					</a>
					<a  href="#home">Contact Us</a>
					<a href="#news">About</a>
					<a href="#about">Services</a>
					<a class="active" href="#about">Home</a>
				</div>
				<script>
					function myFunction() {
					  var x = document.getElementById("myTopnav");
					  if (x.className === "topnav") {
					    x.className += " responsive";
					  } else {
					    x.className = "topnav";
					  }
					}
				</script>
				<div class="main">
					<div class="container" id="header">
						<h1>WELCOME <span id="usr"><?php echo 'welcome ' . $_SESSION['name']; ?></span></h1>
						<p>4LOOP SOFTWARE SOLUTIONS is made up of a team of young vibrant minds, passionate about providing solutions to software problems.</p>
						<a href="#">Want to know about the designs? Click here</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="body">
		<div id="body">
			<h3>OUR SERVICE</h3>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>We develop and solve software problems</p>
					</div>
					<div class="col-md-4">
						<p>We provide our clients with professional business ideas</p>
					</div>
					<div class="col-md-4">
						<p>We help to increase organisation performance</p>
					</div>
				</div>
			</div>
			<a href="contactus/" id="contact">Contact Us</a>
		</div>
	</div>
	<div class="footer">
		<ul>
			<li><a href="#">Privacy policy</a></li>
			<li><a href="#">Term of use</a></li>
			<li>&copy; 2019 4LOOP</li>
		</ul>
	</div>
</body>
</html>