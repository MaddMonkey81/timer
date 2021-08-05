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

	<nav class="navbar navbar-light navbar-expand-lg mb-5"> <!-- lg decides when it will expand or not -->
		<div class="container">

		<a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="logo" title="logo"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<form action="home.php" method="post">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="cart.php" class="nav-link">Shop</a></li>
					<li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
					<li class="nav-item"><a href="zombie.php" class="nav-link">Zombie</a></li>
					<li class="nav-item"><a href="checkout.php" class="nav-link">check</a></li>
					<li class="nav-item"><a href="autoload.php" class="nav-link">payfast</a></li>
					<li class="nav-item"><a href="" class="nav-link">Bookings</a></li>
					<li class="nav-item"><a href="" class="nav-link">WODS</a></li>

				</ul>
			</form>		
		</div>

	   </div>	
	</nav>

	<!-- End Navigation -->
</body>
</html>