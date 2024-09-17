<?php
    include_once 'config.php'
?>

<?php

    session_start();

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM userinfo WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (!$result || mysqli_num_rows($result) === 0) {
        echo "<script>
        alert('Invalid Email!');
        </script>";
        // Handle the error or redirect the user as needed.
        exit();
    }
    
    $row = mysqli_fetch_assoc($result);

    if ($pass != $row['Password']) {
        echo "<script>
        alert('Invalid Password!');
        </script>";
        // Handle the error or redirect the user as needed.
        exit();
    }    
    else{
        $_SESSION["userId"] = $row['ID'];
    }

    if(isset ($_SESSION["userId"]))
    {
        header("Location:A_Home.php");
        exit();
    }

    $conn->close();
?>