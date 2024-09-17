<?php
    include_once 'config.php'
?>

<?php

    $from = $_POST["myDropdown"];
    $to = $_POST["myDropdown2"];
    $date = $_POST["day"];
    $time = $_POST["time"];
    $adult = $_POST["Adults"];
    $child = $_POST["children"];
    $count = $_POST["Adults"] + $_POST["children"];
    $amount = $_POST["total"];

    $sql1 = "SELECT * FROM schedules  WHERE Departure = '$from' AND Destination = '$to' AND Date = '$date' AND DepartureTime = '$time'";
    $result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "successfull";
        }
    } 
    else {
        echo "<script>
        alert('Invalid booking! Please check schedules and enter again');
        window.location.href='E_Booking.html';
        </script>";
    }

    $sql2 = "INSERT INTO booking(Departure, Destination, Date, Time, Adults, Children, Count, Amount) values ('$from','$to','$date','$time','$adult','$child','$count','$amount')";

    if(mysqli_query($conn,$sql2)){
        echo "<script>
        alert('Your ticket booking has been successfully completed');
        window.location.href='E_Booking.php';
        </script>";
    }
    else{
        echo "<script>
        alert ('Ticket booking failed');
        </script>";
    }

    $conn->close();
?>