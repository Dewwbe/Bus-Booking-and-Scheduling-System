<?php
	include_once 'config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gen = $_POST['gen'];
    $address = $_POST['address'];

	$query = "UPDATE userinfo SET Name = $name, Email = $email, ContactNo = $phone, DOB = $dob, Gender = $gen, Address = $address WHERE ID = {$_SESSION['userId']}";
	$result = mysqli_query($conn, $query);


	if (mysqli_num_rows($result) > 0) {
        echo "User account updated successfully.";
    } else {
    echo "Failed to update user account.";
    }

    $conn->close();
?>	