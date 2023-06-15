<?php
//destroy sessionn and redirect to login page

//include constants php
include('../config/constants.php');

session_destroy();//unsets $_SESSION['user'];

header('location:' . SITEURL . 'admin/login.php');




?>