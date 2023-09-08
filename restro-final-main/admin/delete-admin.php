<?php
//get id of admin to delete

   include('../config/constants.php');
   echo $id = $_GET['id'];


  $sql = "DELETE FROM tbl_admin WHERE id=$id";


  $res = mysqli_query($conn, $sql);


  if($res==TRUE)
  {
    //query exceuted and admin deleted

   // cretae session variable 
      $_SESSION['delete'] = "<div class='success'>Admin Deleted Succesfully</div>";
      header("location:".SITEURL.'admin/manage-admin.php');

  }

  else
  {
    //failed to deleted admin
    $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin</div>";
    header("location:".SITEURL.'admin/manage-admin.php');

  }

?>
