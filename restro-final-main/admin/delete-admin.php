<?php
//1.get id of admin to delete
   //include constants .php here

   include('../config/constants.php');
   echo $id = $_GET['id'];


  $sql = "DELETE FROM tbl_admin WHERE id=$id";


  $res = mysqli_query($conn, $sql);


  if($res==TRUE)
  {
    //query exceuted and admin deleted
    //echo "ADMIN DELETED";

   // cretae session variable 
      $_SESSION['delete'] = "<div class='success'>Admin Deleted Succesfully</div>";
      header("location:".SITEURL.'admin/manage-admin.php');

  }

  else
  {
    //failed to deleted admin
    $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin</div>";
    header("location:".SITEURL.'admin/manage-admin.php');


    //echo " FAILED TO DELETE ADMIN";
  }

//2.create  sql qury to dlete admin








//3.redirect to manage admin page with msg 








?>