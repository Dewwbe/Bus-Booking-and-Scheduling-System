<?php
   session_start();

    $userId = "";
if(isset ($_SESSION["userId"])) { //Already logged in
    $userId = $_SESSION ["userId"]; //Use the session value
}
else {// Not logged in
header("Location:B_Login.html"); //Redirect to the login page
}
?>

<?php
	include_once 'config.php';

	$query = "SELECT * FROM userinfo WHERE ID = {$_SESSION['userId']}";
	$result = mysqli_query($conn, $query);


	if (mysqli_num_rows($result) > 0) {
	$profile = mysqli_fetch_assoc($result);
	?>

	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>User Profile | Bus Booking System</title>
			<link rel="icon" href="logo.png">
			<link rel="stylesheet" href="Common.css">
			<link rel="stylesheet" href="GHIJ.css">
		</head>

		<body class="parallax">
			<header>
				<nav>
					<ul>
						<li><a href="A_Home.php">Home</a></li>
						<li><a href="D_Schedules.php">Schedules</a></li>
						<li><a href="E_Booking.php">Booking</a></li>
						<li><a href="F_SpecialTours.php">Special Tours</a></li>
						<li><a href="I_ContactUs.php">Contact Us</a></li>
						<li><a href="J_About.php">About Us</a></li>
					</ul>
					<ul class="right">
						<li>
							<form method = "post" action = "logoff.php">
								<input name = "logoff" type = "submit" value = "Log Out"/>
							</form>    
						</li>
					</ul>
				</nav>

				<a href="G_Profile.php">
				<img class="profilepic"  src="profile.jpg" alt="profile">
				</a>

				<div><img style="width:20%;" src="logo.png" alt="logo"></div>
				<h1 class="topic">Bus Booking System</h1>
				<p>Book your bus tickets online with ease</p>
			</header>

			<main>
				<section class="profile-details">
					<h2 style = "margin-top: 10vh;">Profile Details</h2>
					<div class="profile-info">
						<div class="tours">
							<img id="displayimg" src="profile.jpg">
							<br><br>
							<h3>Name</h3>
							<div class="box"><?php echo $profile['Name']; ?></div>
							<br>
							<h3>Email</h3>
							<div class="box"><?php echo $profile['Email']; ?></div>
							<br>
							<h3>Phone</h3>
							<div class="box"><?php echo $profile['ContactNo']; ?></div>
							<br>
							<h3>Date of Birth</h3>
							<div class="box"><?php echo $profile['DOB']; ?></div>
							<br>
							<h3>Gender</h3>
							<div class="box"><?php echo $profile['Gender']; ?></div>
							<br>
							<h3>Address</h3>
							<div class="box"><?php echo $profile['Address']; ?></div>
						</div>

						<h2 style = "margin-top: 10vh;">Edit Details</h2>
						<div class="tours">
							<form method="POST" action="edit.php">
								<label for="name">Name:</label>
								<input type="text" name="name" value="<?php echo $profile['Name']; ?>"><br><br>

								<label for="email">Email:</label>
								<input type="email" name="email" value="<?php echo $profile['Email']; ?>"><br><br>

								<label for="contact">Phone:</label>
								<input type="text" name="phone" value="<?php echo $profile['ContactNo']; ?>"><br><br>

								<label for="DOB">Date of Birth:</label>
								<input type="date" name="dob" value="<?php echo $profile['DOB']; ?>"><br><br>

								<label for="name">Gender:</label>
								<input type="text" name="gen" value="<?php echo $profile['Gender']; ?>"><br><br>

								<label for="address">Address:</label>
								<input type="text" name="address" value="<?php echo $profile['Address']; ?>"><br><br>

								<input type="submit" value="Update">
							</form>
							<h2>Delete Account</h2>
							<form method="POST" action="delete.php"> 
								<input type="submit" value="Delete Account">
							</form>
						</div>
						<h2 style = "margin-top: 10vh;">Ongoing Trips</h2>
						<div id="container">

							<div class="f_routes_container">
								<span style="color:black;">Colombo - Negombo</span>
								<button><a href="#">Cancel</a></button>
							</div>
							<div class="f_routes_container">
								<span style="color:black;">Galle - Colombo</span>
								<button><a href="#">Cancel</a></button>
							</div>

						</div>
						<br>
						<h2>Your Trips</h2>
						<div id="container">

							<div class="f_routes_container">
								<span style="color:black;">Colombo - Negombo</span>
							</div>
							<div class="f_routes_container">
								<span style="color:black;">Galle - Colombo</span>
							</div>
							<div class="f_routes_container">
								<span style="color:black;">Colombo - Negombo</span>
							</div>
							<div class="f_routes_container">
								<span style="color:black;">Galle - Colombo</span>
							</div>

						</div>
					</div>
				</section>
			</main>

			<footer>
				<hr>
				<centre>
					<div><img style="width:10%; margin-top: 3vh;" src="logo.png" alt="logo"></div><br>
					<a href="A_Home.php">Home | </a>
					<a href="J_About.php">About Us | </a>
					<a href="I_ContactUs.php">Contact Us | </a>
					<a href="H_Feedback.php">FAQ</a><br><br>
					<p>Bus Booking System &copy; 2023</p>
				</centre>
			</footer>
		</body>
	</html>
	
<?php
	} else {
	echo "User profile not found.";
	}
	
	$conn->close();
?>	