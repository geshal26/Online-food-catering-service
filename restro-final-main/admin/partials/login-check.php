<?php
//chehck wheter user is logged in or not 
//access control
if(!isset($_SESSION['user']))
{
     //user is not logged in redirect to login page with msg

    $_SESSION['nologin-msg'] = "<div class='error text-center'>Please Login to acces admin panel</div>";


    header('location:' . SITEURL . 'admin/login.php');
    
}


?>