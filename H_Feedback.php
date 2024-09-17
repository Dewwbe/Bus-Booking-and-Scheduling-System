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
		<title>Feedback | Bus Booking System</title>
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

		<div id="user_feedback">
			<h1 style = "color:white; margin: 5vw;">Give Us your feedback</h1>
	
			<form action="process_feedback.php">
			<textarea name = "msg" id="userReview" rows="10" cols="50"></textarea>
			  <div class="rate">
				<input type="radio" id="star5" name="rate" value="5" />
				<label for="star5" title="text">5 stars</label>
				<input type="radio" id="star4" name="rate" value="4" />
				<label for="star4" title="text">4 stars</label>
				<input type="radio" id="star3" name="rate" value="3" />
				<label for="star3" title="text">3 stars</label>
				<input type="radio" id="star2" name="rate" value="2" />
				<label for="star2" title="text">2 stars</label>
				<input type="radio" id="star1" name="rate" value="1" />
				<label for="star1" title="text">1 star</label>
			  </div>
			</div>
			<br>
			<div class="container">
				<div class="rectangle top-left">User11 <br>"I recently used your bus booking system and I must say it was a fantastic experience! The interface was user-friendly, and the whole process was smooth and hassle-free. I could easily search for buses, compare prices, and make my booking within minutes. Kudos to your team for creating such a convenient platform!"</div>

				<div class="rectangle top-right">Ravi<br>"I'm extremely satisfied with the bus booking system provided by your company. The website was easy to navigate, and I found a wide range of bus options to choose from. The booking process was quick, and I received my e-ticket instantly. The system kept me informed about my trip, and the bus arrived on time. I highly recommend your service to anyone looking for a reliable and efficient bus booking platform."</div>
				<br>
				<div class="rectangle bottom-left">Aravinda<br>"I recently used your bus booking system, and I have to say it exceeded my expectations. The user interface was modern and visually appealing, and the booking process was straightforward. I appreciate the real-time availability updates and the ability to select my preferred seat. The confirmation email and SMS notifications were also helpful in keeping me informed. Great job!"</div>
				<div class="rectangle bottom-right">Ashan<br>"I've been using your bus booking system for a while now, and I'm consistently impressed with its reliability. The website is easy to use, and I appreciate the wide selection of bus operators and routes available. The system provides accurate information on bus timings and fares, making it convenient to plan my trips. Thank you for providing a seamless and efficient booking experience."</div>
				<br>
				<div class="rectangle middle-left">Daniel<br>"I recently had a great experience using your bus booking system. The platform is intuitive, and I could easily find the bus I needed for my journey. The ability to filter search results by different criteria was very helpful. The payment process was secure, and I received my e-ticket promptly. The trip itself was comfortable and on schedule. I'm a happy customer and will definitely use your service again."</div>
				<div class="rectangle middle-right">Kaveesha<br>"I've used several bus booking systems in the past, but yours stands out for its simplicity and efficiency. The website is well-designed and easy to navigate, making the booking process a breeze. I was impressed by the wide range of bus operators available, and I found competitive prices for my chosen route. The confirmation process was quick, and I had a smooth journey overall. I'll definitely be using your service again."</div>
			</div>

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