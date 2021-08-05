<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cosmic Dust Cloud | Cloud Apps</title>
	<link rel="shortcut icon" href="img/favicon.png">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Style CSS hover -->
	<link rel="stylesheet" href="css/hover.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
	<div class="d-flex justify-content-end alignme">
		<a class="mr-2" href="#">Welcome: <?php echo $fetch_info['name'] ?></a>
		<button type="button" class="btn btn-dark "><a href="logout-user.php">Logout</a></button>
	</div>
</div>

	<!-- End Top Bar -->

	<!-- Navigation -->

	<nav class="navbar navbar-light navbar-expand-lg"> <!-- lg decides when it will expand or not -->
		<div class="container">

		<a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="logo" title="logo"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<form action="home.php" method="post">
				<ul class="navbar-nav ml-auto">
					<!--li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="cart.php" class="nav-link">Shop</a></li>
					<li class="nav-item"><a href="profile/profile.php" class="nav-link">User</a></li>
					<li class="nav-item"><a href="" class="nav-link">Apps</a></li>
					<li class="nav-item"><a href="" class="nav-link">PB Board</a></li>
					<li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
					<li class="nav-item"><a href="" class="nav-link">Bookings</a></li>
					<li class="nav-item"><a href="" class="nav-link">WODS</a></li-->
					<li class="nav-item"><input class="nav-link" type="submit" name="Home" value="Home"/></li>
					<li class="nav-item"><input class="nav-link" type="submit" name="Cart" value="Cart"/></li>
					<li class="nav-item"><input class="nav-link" type="submit" name="Profile" value="Profile"/></li>
					<li class="nav-item"><input class="nav-link" type="submit" name="Zombie" value="Zombie"/></li>
					<li class="nav-item"><input class="nav-link" type="submit" name="Exersizes" value="Exersizes"/></li>
				</ul>
			</form>		
		</div>

	   </div>	
	</nav>

	<!-- End Navigation -->

	<!-- Load Content -->
<div class="container py-5">
	<div class="row">
		<div class="col">
			<?php
				if(isset($_POST['Home'])) {
					require "landing.php";
				}	
				if(isset($_POST['Cart'])) {
					require "cart.php";	
				}	
				if(isset($_POST['Profile'])) {
					require "profile/profile.php";
				}	
				if(isset($_POST['Zombie'])) {
					require "zombie.php";
				}
				if(isset($_POST['Exersizes'])) {
					require "exersizes.php";
				}
			?>
		</div>
	</div>
</div>
	<!-- End Load Content -->

	<!-- Start Jumbotron -->

	<div class="jumbotron py-5 mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8 col-xl-9 my-auto">
					<h4>Looking for quality web development and design services?</h4>
				</div>
				<div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
					<a href="#" class="btn btn-primary btn-lg">Contact us</a>
				</div>
			</div>
		</div>
	</div>

	<!-- End Jumbotron -->

	<!-- Start Footer -->

	<footer>
		<div class="container"><!-- bg-dark background dark -->
			<div class="row text-light text-center py-4 justify-content-center">
				<div class="col-sm-10 col-md-8 col-lg-6">
					<img src="img/logo-white.png" alt="">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
					   Facilis ipsa, optio aspernatur, aperiam nemo corporis provident,
					   accusamus libero alias doloremque nam neque fugiat beatae fuga vitae 
					   sunt odio similique natus?</p>
					<ul class="social pt-3">
						<li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
						<li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					</ul>   
				</div>
			</div>
		</div>
	</footer>

	<!-- End Footer -->

	<!-- Start Socket -->

	<div class="socket text-light text-center py-3">
		<p>&copy; <a href="https://cosmicdustcloud.com" target="_blank">cosmicdustcloud.com</a></p>
		<span id="zoom"></span><!-- ${zoom} -->
	</div>

	<!-- End Socket -->

	<!-- Script Source Files -->

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="js/all.min.js"></script>
	<!-- my font resize script -->

	<!-- End Script Source Files -->

</body>
</html>
