<?php
    include_once 'config.php'
?>

<?php

    $from = $_POST["from"];
    $to = $_POST["to"];
    $datedep = $_POST["day1"];
    $datearr = $_POST["day2"];
    $busno = $_POST["num"];
    $ac = $_POST["option"];

//insert
    $sql = "INSERT INTO specialtours(Departure,Destination,DepartureDate,ArrivalDate,BusCount,Type) values ('$from','$to','$datedep','$datearr','$busno','$ac')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Your request has sent to the admin');
        window.location.href='F_SpecialTours.php';
        </script>";
    }
    else{
        echo "<script>
        alert ('Request failed');
        </script>";
    }

    $conn->close();
?>