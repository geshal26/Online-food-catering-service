<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br>
        <br>


        <?php
        
           //1.get the id of the selected admin
              $id = $_GET['id'];

            $sql = "SELECT *FROM tbl_admin WHERE id=$id";

        $res = mysqli_query($conn, $sql);
           
           //2.sql query to get the id 
          if($res==TRUE)
          {

            $count = mysqli_num_rows($res);

            if($count==1)
            {
                  //get the details
                $row = mysqli_fetch_assoc($res);
                $full_name = $row['full_name'];
                $username = $row['username'];



            }
            else
            {
                //redirect to manage admin page
                  header("location:" . SITEURL . 'admin/manage-admin.php');
            }


          }

        
        
        
        ?>

        <form action="" method="POST">
           <table class="tbl-30">

              <tr>
                <td>FULL NAME:</td>
                <td><input type="text" name="full_name" value="<?php echo $full_name;?>"></td>
              </tr>

              <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username;?>">
                    </td>


              </tr>


              <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" class="btn-secondary" name="submit" value="Update Admin">
                </td>
              </tr>



           </table>


        </form>
        
    </div>
</div>

<?php

//check wheter the submit is clicked ot not 

if(isset($_POST['submit']))
{

    //echo "Buuton clicked";

    //get all the values from form to update
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];




    //create sql query to update 


    $sql = "UPDATE tbl_admin SET full_name='$full_name',username='$username' WHERE id=$id";


    //exceute the query

    $res=mysqli_query($conn,$sql);

    if($res==TRUE)
    {
          //query executed admin updated
          $_SESSION['update']="<div class='success'>admin updated Successfully.</div>";
          header("location:" . SITEURL . 'admin/manage-admin.php');
    }
    else
    {
        //failed to update

        $_SESSION['update'] = "<div class='error'>Failed to update Admin.</div>";
        header("location:" . SITEURL . 'admin/manage-admin.php');
    }  


}



?>


<?php include('partials/footer.php');?>