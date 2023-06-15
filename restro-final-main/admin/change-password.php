<?php include('partials/menu.php');?>

<div class="main-content">
      <div class="wrapper">
                <h1>Change-Password</h1>
                <br>
                <br>

                <?php
                
                    if(isset($_GET['id']))
                    {
                            $id = $_GET['id'];
                    }
                
                
                
                ?>  

                <form action="" method="POST">
                        <table class="tbl-30">
                                <tr>
                                    <td>Current Password:</td>
                                
                                    <td>
                                    <input type="password" name="curr_password" placeholder="old Password">
                                    </td>
                                </tr>   
                            <tr>
                                    <td>New Password:</td>
                                    <td><input type="password" name="new_password" placeholder="New Password"></td>

                            </tr>
                            <tr>
                                    <td>Confirm Password</td>
                                    <td><input type="password" name="confirm_password" placeholder="confirm Password"></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="hidden"  name="id" value="<?php echo $id;?>">
                                    <input type="submit" name="submit" value="change Password" class="btn-secondary">
                                    </td>
                            </tr>

                        </table>
                    </form>
         </div>


 </div>


<?php
   //check wheter submit button is clicked

   if(isset($_POST['submit']))
   {
            $id = $_POST['id'];
            $currentpassword = md5($_POST['curr_password']);
            $newpassword = md5($_POST['new_password']);
            $confirmpassword = md5($_POST['confirm_password']);

            $sql = "SELECT *FROM tbl_admin WHERE id=$id AND pswrd='$currentpassword'";
            $res = mysqli_query($conn, $sql);

            if($res==TRUE)
            {
                   $count = mysqli_num_rows($res);
                   if($count==1)
                   {
                     //wheter the new and confirm password match
                            if($newpassword==$confirmpassword)
                            {
                            $sql2 = "UPDATE tbl_admin SET pswrd='$newpassword' WHERE id=$id";

                            $res2 = mysqli_query($conn, $sql2);


                                    if($res2==TRUE)
                                    {
                                        //display succes message
                                        $_SESSION['change-pwd'] = "<div class='success'>Password changed successfully</div>";

                                        header('location:' . SITEURL . 'admin/manage-admin.php');

                                    }
                                    else
                                    {

                                        $_SESSION['change-pwd'] = "<div class='error'>Failed to change Password</div>";

                                        header('location:' . SITEURL . 'admin/manage-admin.php');


                                    }

                            
                            }
                            else
                            {
                                //reddirect to manage admin page 
                                $_SESSION['pwd-not-match'] = "<div class='error'>Password do not match</div>";

                                header('location:' . SITEURL . 'admin/manage-admin.php');

                            }
                   }
                   else
                   {
                       $_SESSION['user-not-found'] = "<div class='error'>User Not found</div>";

                        header('location:' . SITEURL . 'admin/manage-admin.php');
                   }
            }




   }
   
?>
<?php include('partials/footer.php');?>