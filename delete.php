<?php
	include_once 'config.php';

	$query = "DELETE FROM userinfo WHERE ID = {$_SESSION['userId']}";
	$result = mysqli_query($conn, $query);


	if (mysqli_num_rows($result) > 0) {
        echo "User account deleted successfully.";
    } else {
    echo "Failed to delete user account.";
    }

    $conn->close();
?>	