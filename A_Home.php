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
		<title>Home | Bus Booking System</title>
		<link rel="icon" href="logo.png">
		<link rel="stylesheet" href="Common.css">
		<link rel="stylesheet" href="ABC.css">
		
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
			<div class="gallery-container">

				<div class="gallery">
					<img src="Pic (1).jpg" class="pic">
				</div>
				
				<div class="gallery">
					<img src="Pic (2).jpg" class="pic">
				</div>

				<div class="gallery">
					<img src="Pic (3).jpg" class="pic">
				</div>

				<div class="gallery">
					<img src="Pic (4).jpg" class="pic">
				</div>

				<div class="gallery">
					<img src="Pic (5).jpg" class="pic">
				</div>

				<div class="gallery">
					<img src="Pic (6).jpg" class="pic">
				</div>

				<div class="gallery">
					<img src="Pic (7).jpg" class="pic">
				</div>

			</div>
			
			<div class="button-container">
				<a href="D_Schedules.php"><button class="navigation">Check Schedules</button></a>
				<a href="E_Booking.php"><button class="navigation">Book Now</button></a>
				<a href="F_SpecialTours.php"><button class="navigation">Special Tours</button></a>
			</div>

			<p class="subheading">Frequent Routes</p>
			<div id="container">

				<div class="f_routes_container">
					<span>Colombo -<br>Negombo</span>
					<button><a href="D_Schedules.php">Search Buses</a></button>
				</div>
				<div class="f_routes_container">
					<span>Galle -<br>Colombo</span>
					<button><a href="D_Schedules.php">Search Buses</a></button>
				</div>
				<div class="f_routes_container">
					<span>Trincomalee -<br>Colombo</span>
					<button><a href="D_Schedules.php">Search Buses</a></button>
				</div>
				<div class="f_routes_container">
					<span>Nuwara Eliya -<br>Galle</span>
					<button><a href="D_Schedules.php">Search Buses</a></button>
				</div>

			</div>

			<section>
				<p class="subheading">Offers & Promotions</p>
				<div id="container">
					<centre>
					<div id="offer-id">
						<button id="prev-button" onclick="nextOffer(-1)"><</button>
						<div class = "offer1"><img src="offer1.jpg" alt="offer1" class="offer"></div>
						<div class = "offer1"><img src="offer2.jpg" alt="offer1" class="offer"></div>
						<div class = "offer1"><img src="offer3.jpg" alt="offer1" class="offer"></div>
						<div class = "offer1"><img src="offer4.jpg" alt="offer1" class="offer"></div>

						<div class = "offer2"><img src="offer2.jpg" alt="offer2" class="offer"></div>
						<div class = "offer2"><img src="offer3.jpg" alt="offer2" class="offer"></div>
						<div class = "offer2"><img src="offer4.jpg" alt="offer2" class="offer"></div>
						<div class = "offer2"><img src="offer1.jpg" alt="offer2" class="offer"></div>

						<div class = "offer3"><img src="offer3.jpg" alt="offer3" class="offer"></div>
						<div class = "offer3"><img src="offer4.jpg" alt="offer3" class="offer"></div>
						<div class = "offer3"><img src="offer1.jpg" alt="offer3" class="offer"></div>
						<div class = "offer3"><img src="offer2.jpg" alt="offer3" class="offer"></div>

						<button id="next-button" onclick="nextOffer(1)">></button>
					</div>
					</centre>
				</div> 
			</section>
			
			<div style="width: fit-content; margin: 5vw;">
				<h7>Mode of Payment</h7>
				<ul style="list-style: none; margin-top: 10%;">
					<li class="modepay"><img src="visa.jpg" alt="pay1" class="pay"></li>
					<li class="modepay"><img src="mstcard.jpg" alt="pay2" class="pay"></li>
					<li class="modepay"><img src="amex.jpg" alt="pay3" class="pay"></li>
					<li class="modepay" id="frimi"><img src="frimi.jpg" alt="pay4" class="pay"></li>
				</ul>
			</div>
			<div class="socialapp" style="top: 355vh;">
				<a href=""><img src="WA.jpg" alt="WA" class="social"></a><br><br>
				<a href=""><img src="fb.jpg" alt="fb" class="social"></a><br><br>
				<a href=""><img src="insta.jpg" alt="insta" class="social"></a><br>
			</div>
		</main>

		<script src="AllScripts.js"></script>

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