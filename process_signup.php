<?php
    include_once 'config.php';
?>

<?php

    $userID = uniqid();
    $name = $_POST["name"];
    $cpass = $_POST["confirm_password"];
    $email = $_POST["email"];
    $cno = $_POST["contactNo"];


    $sql = "INSERT INTO userinfo(ID,Name,Password,Email,ContactNo) values ('$userID','$name','$cpass','$email',$cno)";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Registered succesfully');
        window.location.href='B_Login.html';
        </script>";
    }
    else{
        echo "<script>
        alert ('Registration failed');
        </script>";
    }

    $conn->close();
?>