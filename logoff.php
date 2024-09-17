<?php

session_start();

if(isset ($_POST["logoff"])){
    session_destroy();
    header("Location:B_Login.html");
}
else {
    header("Location:A_Home.php");
}
?>