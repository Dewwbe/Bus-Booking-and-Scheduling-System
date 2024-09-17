<?php
    include_once 'config.php';
?>

<?php

    $msg = $_POST["msg"];


    $msg = "INSERT INTO feedback(Message) values ('$msg')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Input succesfully');
        window.location.href='B_Login.html';
        </script>";
    }
    else{
        echo "<script>
        alert ('Input failed');
        </script>";
    }

    $conn->close();
?>