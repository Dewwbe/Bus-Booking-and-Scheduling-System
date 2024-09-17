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

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>About Us | Bus Booking System</title>
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
			<h2 class="aboutUs">About Us</h2>
			<div class="menu">
				<main>
				  <h3 class="welcome">Welcome to our bus booking and scheduling website!</h3><br>
				  <h4 class="description">We are a team of experienced professionals who are passionate about providing convenient and reliable transportation services to our customers. Our website is designed to make it easy for you to book bus tickets and plan your travel itinerary with just a few clicks. We believe that travel should be stress-free and enjoyable, and that's why we strive to provide you with the best possible customer service. Whether you are traveling for 'business or pleasure, we are committed to helping you get to your destination safely and on time. Thank you for choosing our website for your travel needs, and we look forward to serving you!
				  </h4>
			  </div>
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