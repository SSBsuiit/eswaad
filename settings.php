<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Swaad | Sambalpur </title>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Fredericka the Great' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Frijole' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
		<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'> 
		<!-- the Fabicon -->
		<link rel="shortcut icon" href="img/l.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<!-- External Stylings -->
		<link rel="stylesheet" href="css/vstyles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>
    <body style="background:lightgrey;">
     
	<!--Fixed-Top Navigation Bar-->
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top navbar-shadow" data-aos="">
			<a class="navbar-brand" href="#" style="color:#020B37;font-family: 'Acme';font-size: 30px;padding:0px;margin-left:10px;" ><span style="color:orange;">e-Food</span><span style="color:grey;">SBP</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
				<ul class="navbar-nav" data-aos="";>
					<li class="nav-item">
						<a class="nav-link" href="index.php"><i class="fas fa-home"></i><span style="color:#FFFDE7;"> Home</span></a>
					</li>
					<!-- Dropdown -->
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle"  href="#" id="navbardrop" data-toggle="dropdown">
						<i class="fas fa-ellipsis-v"></i> <span style="color:#FFFDE7;">Categories</span>
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid lightblue;" href="organic.php">Organic Basket</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid brown;" href="regional.php">Regional Cuisine</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid pink;" href="homemade.php">Homemade Delights</a>
						<a class="dropdown-item  nav-elevate" style="border-left: 6px solid yellow;" href="#">Street Food</a>
					  </div>
					</li>
					<li class="nav-item" data-aos="fade-in">
						<a class="nav-link"  style="box-shadow: 0 1px 8px 0 grey, 0 5px 10px 0 black;background-color:lightgrey;color:white;"   href="settings.php"><i class="fas fa-user-alt"></i> <span style="color:#FFFDE7;">My Account</span></a>
					</li>
						
					<?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li class="nav-item">
						<a class="nav-link"   href="cart.php"><i class="fas fa-shopping-cart"></i> <span style="color:#FFFDE7;">Cart</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"   href="logout_script.php"><i class="fas fa-sign-out-alt"></i> <span style="color:#FFFDE7;">Logout</span></a>
					</li>
					
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
						<a class="nav-link"  href="signup.php"><i class="fas fa-user-plus"></i> <span style="color:#FFFDE7;">SignUp</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link"  href="login.php"><i class="fas fa-sign-in-alt"></i> <span style="color:#FFFDE7;">Login</span></a>
					</li>
					    <?php
                    }
                    ?>
													
				</ul>
			</div>  
		</nav>
		<!--#NAV_end-->
		
	 <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
			</br></br></br></br>
            <div class="row">
                <div class="col-lg-4 offset-lg-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button data-aos="fade-right" type="submit" class="btn btn-danger box-shadow float-right">Change</button>
                        <?php
                        if(isset($_GET['error']))
                        {echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";}
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
		<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<!--AOSjs-->
		<script src='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js'></script>
		<script>
			AOS.init({
				duration: 1200,
			})
		</script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

    </body>
</html>