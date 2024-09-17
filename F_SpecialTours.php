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
		<title>Special Tours | Bus Booking System</title>
		<link rel="icon" href="logo.png">
		<link rel="stylesheet" href="Common.css">
		<link rel="stylesheet" href="DEF.css">
		<script src="AllScripts.js"></script>
	</head>

	<body class="parallax">
		<header>
			<nav>
				<ul>
					<li><a href="A_Home.php">Home</a></li>
					<li><a href="D_Schedules.phpl">Schedules</a></li>
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
    	
		<div class="sptours" style="margin-top: 10vh;">

        <form method = "post" action = "process_stours.php">
		<center>
            From
            <input type="text" name="from" id="fromInput" value="" required>
            To
            <input type="text" name="to" id="toInput" value="" required>
            <br><br>
            <span id="errorMessage" class="error-message"></span><br><br>
        </form>

        <script>
				var fromInput = document.getElementById("fromInput");
				var toInput = document.getElementById("toInput");
				var errorMessage = document.getElementById("errorMessage");

				fromInput.addEventListener("input", validateInput);
				toInput.addEventListener("input", validateInput);

				function validateInput() {
					var fromValue = fromInput.value;
					var toValue = toInput.value;

					if (fromValue === toValue) {
						errorMessage.textContent = "Cannot select the same location.";
					} else {
						errorMessage.textContent = "";
					}
				}
        </script>

        Date of Departure
        <input type="date" name="day1" id="date" requied>
        Date of Arrival
        <input type="date" name="day2" id="date" requied>

        <br>
        <br>
        <br>
        Number of Buses:

        <input type="number" name=" num" value=" Number of Buses :" required>

        <br>
        <br>
        <br>

        <input type="radio" name="option" value="A/C"> A/C
        <input type="radio" name="option" value="Non- A/C"> Non- A/C

        <br>
        <br>
        <br>
        
		
			<input name="reqbtn" type="submit" value="Send a request" id="search" >
		
			</center>
        </form>
    </div>

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

