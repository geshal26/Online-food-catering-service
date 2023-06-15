<?php

      //start session
    session_start();
    //create constants to store non repeating values
     define('SITEURL', 'http://localhost/restro/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD', ''); 
    define('DB_NAME', 'restro');
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_connect_error());
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_connect_error());


?>
