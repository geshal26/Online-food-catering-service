<?php include('partials/menu.php');?>

        <div class="main-content">
        
                <div class="wrapper">
                    <h1>Manage-Admin</h1>
                    <br>
                    <br>
                    <?php

                       if(isset($_SESSION['add']))
                       {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                       }
                       
                       if(isset($_SESSION['delete']))
                       {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                       }
                       if(isset($_SESSION['update']))
                       {
                            echo $_SESSION['update'];
                            unset ($_SESSION['update']);
                       }
                       if(isset($SESSION['user-not-found']))
                       {
                            echo $_SESSION['user-not-found'];
                            unset($_SESSION['user-not-found']);
                       }
                       if(isset($_SESSION['pwd-not-match']))
                       {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                       }
                       if(isset($_SESSION['change-pwd']))
                       {
                            echo $_SESSION['change-pwd'];
                            unset($_SESSION['change-pwd']);
                       }
                       

                    ?>
                    <br><br><br>

                    <a href="add-admin.php" class="btn-primary">Add Admin</a>
                    <br>
                    <br>
                    <br>
                    
                    <table class="tbl-full">
                        <tr>
                            <th>S.NO</th>
                            <th>Full-Name</th>
                            <th>User-Name</th>
                            <th>Actions</th>
                        </tr>
                        
                        <?php

                                    $sql = "SELECT *FROM tbl_admin";
                                    $res = mysqli_query($conn, $sql);

                                if($res==TRUE)
                                {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                           $n = 1;
                                            while($rows=mysqli_fetch_assoc($res))
                                            {
                                            
                                            $id = $rows['id'];
                                            $full_name = $rows['full_name'];
                                            $user_name = $rows['username'];
                                            
                                            ?>
                                            <tr>
                                                    <td><?php echo $n++?></td>
                                                    <td><?php  echo "$full_name"?></td>
                                                    <td><?php  echo "$user_name"?></td>
                                                    <td>
                                                     <a href="<?php echo SITEURL; ?>admin/change-password.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>   
                                                    <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin</a> 
                                                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>
                                                    </td>
                                            </tr>

                                            <?php
                                            
                                                
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            }   
                                        }
                                        else
                                        {

                                        }
                                }   


                          ?>







                     
                       
                    </table>

                    <div class="clearfix"></div>
                </div>
        </div>
<?php include('partials/footer.php');?>


    