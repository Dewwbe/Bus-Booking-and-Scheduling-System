<?php
    include_once 'config.php'
?>

<?php

    $from = $_POST["myDropdown"];
    $to = $_POST["myDropdown2"];
    $date = $_POST["day"];

    $sql1 = "SELECT * FROM schedules  WHERE (Departure = '$from' AND Destination = '$to' AND Date = '$date') OR (Departure = '$from' AND Destination = '$to')";
    $result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result) > 0) {
        echo "<style>
           table,th,td{
             border: 1px solid black;
             border-collapse: collapse;
           }
        </style>";
        echo "<div class = 'tours'>";
        echo "<table>";
        echo "<tr><th>From</th><th>To</th><th>Date</th><th>Departure</th><th>Arrival</th><th>Seats Available</th><th>Price</th></tr>";
  
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["Departure"] . "</td>";
          echo "<td>" . $row["Destination"] . "</td>";
          echo "<td>" . $row["Date"] . "</td>";
          echo "<td>" . $row["DepartureTime"] . "</td>";
          echo "<td>" . $row["ArrivalTime"] . "</td>";
          echo "<td>" . $row["Seats"] . "</td>";
          echo "<td>" . $row["Amount"] . "</td>";
          echo "</tr>";
        }
  
        echo "</table>";
        echo "</div>";
        exit();
    }
    else {
        echo "<script>
        alert('Sorry! No schedules available');
        window.location.href='D_Schedules.html';
        </script>";
    }

    $conn->close();
?>
