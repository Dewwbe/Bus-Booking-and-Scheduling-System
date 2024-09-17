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
		<title>Booking | Bus Booking System</title>
		<link rel="icon" href="logo.png">
		<link rel="stylesheet" href="Common.css">
		<link rel="stylesheet" href="DEF.css">
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

		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3270891.6431457996!2d80.43307525835272!3d7.823265716298578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1686235207994!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		</br></br></br></br>

		<div class="tours">
		<form method = "post" action="process_booking.php">
			<center>
			<label for="myDropdown">From</label>
			<select id="myDropdown" name="myDropdown" required>
				<option value="input" id="inputOption">Enter location</option>
				<option value="Colombo">Colombo</option>
				<option value="Negombo">Negombo</option>
				<option value="Nuwara Eliya">Nuwara Eliya</option>
				<option value="Galle">Galle</option>
				<option value="Trincomalee">Trincomalee</option>
			</select>


			<label for="myDropdown2">To</label>
			<select id="myDropdown2" name="myDropdown2" required>
				<option value="input" id="inputOption2">Enter location</option>
				<option value="Colombo">Colombo</option>
				<option value="Negombo">Negombo</option>
				<option value="Nuwara Eliya">Nuwara Eliya</option>
				<option value="Galle">Galle</option>
				<option value="Trincomalee">Trincomalee</option>
			</select>

			<label for="date">Date</label>
			<input type="date" name="day" id="date" required><br>

			<span id="errorMessage" class="error-message"></span><br>
			</center>

		</br>
		
		<label for="Time">Time :</label>
		<input type="time" name="time" id="Time" required>
		
		<br/><br/></br>
		
		<label for="seatno">Number of seats</label><br/>

		
			<label for="Adults">Adults :</label>
			<select name="Adults" id="Adults" required>
				<option value="Adults"></option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				
			</select>
		

		
			<label for="children">Children :</label>
			<select name="children" id="children" required>
				<option value="children"></option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				
			</select>
		
  		<br/><br/></br>
		<div class="buttonset">
			<div class="calc" onclick="calcPrice();">Calculate Price</div>
		</div>	
		<br/><br/></br>

		<label for="total">Total :</label>
		<input type="text" name="total" id = "total" value="" required> <br/><br/></br>

		
		<label for="paym">Payment Method :</label><br/><br/>

		<div class="container">
		<img src="visa.jpg" class="pay">
		<img src="mstcard.jpg" class="pay">
		<img src="amex.jpg" class="pay">
		<img src="frimi.jpg" class="pay">

		</div>
		<center>
		<input name="paybtn" type="submit" value="Pay" id="search" style="margin-top: 10vh;">
		</center>
		</form>
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

		<script src="DEF.js"></script>

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