<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
         <br>
         <br>

         <?php
             if(isset($_SESSION['add']))//check if session is set or not

             {
                 echo $_SESSION['add'];
                 unset($_SESSION['add']);

                 

             }




         ?>

        <form action=""  method="POST">

          <table class="tbl-30">

             <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
             </tr>

             <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder=" Your Username"></td>
             </tr>

             <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder=" Your password"></td>
             </tr>


             <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
             </tr>

          </table>


        </form>

    </div>
</div>

<?php include('partials/footer.php');?>




<?php
   //process value from form and store in db
   //check wheter the button is clicked or not
   if(isset($_POST['submit']))
   {

        //button clicked 
        //get data from form


      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);//encrypted




      //sql query to store data

        $sql   =  "INSERT INTO tbl_admin SET
              full_name='$full_name',
              username='$username',
              pswrd='$password'";


       //execute query and store in database
    
        $res = mysqli_query($conn,$sql) or die(mysqli_connect_error());
      //chehck wheter qury is excuted
            if($res==TRUE)
            {
            //echo "di";
                 $_SESSION['add'] = "<div class='success'>Admin added successfully</div>";
               //redirect page
                 header("location:" . SITEURL . 'admin/manage-admin.php');
            }
            else
            {
            //echo "fi";
                $_SESSION['add'] = "<div class='error'>Failed to add  admin</div>";
            //redirect page
               header("location:" . SITEURL . 'admin/manage-admin.php');
            }
      
   }



?>   