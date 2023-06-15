
<?php include('../config/constants.php')?>
<html>
    <head>
        <title>LOGIN -RESTRO</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="login text-center">
            <h1>Login</h1>
            <br>
            <br>

            <?php


              if(isset($_SESSION['login']))
              {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
              }
              if(isset($_SESSION['nologin-msg']))
              {
                echo $_SESSION['nologin-msg'];
                unset($_SESSION['nologin-msg']);
              }
            ?>
            <br>
            <br>

            <!-- login form-->
            <form action="" method="POST" class=""text-center">
            Username: <br>
            <input type="text" name="username" placeholder="enter user name">
            <br><br>
            Password: <br>
            <input type="password" name="password" placeholder="Enter Password">
             
            <br><br>

            <input type="submit" value="Login"  name="submit" class="btn-primary">

            </form>



        </div>
    </body>
</html>


<?php


//check wheter submit button is clicked or not 


if(isset($_POST['submit']))
{
    //get data from login  form
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $sql = "SELECT *FROM tbl_admin WHERE username='$username' AND pswrd='$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if($count==1)
    {
             //login success

        $_SESSION['login'] = "<div class='success text-center'>Login Succesfull.</div>";
        $_SESSION['user'] = $username;
        
        
        header('location:' . SITEURL . 'admin/');

    }
    else{

           //login fail
           $_SESSION['login'] = "<div class='error text-center'>Login unsuccessfull Try Agian!!.</div>";
           header('location:' . SITEURL . 'admin/login.php');
    }

    
}




?>
