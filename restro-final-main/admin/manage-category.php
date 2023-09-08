<?php include('partials/menu.php');?>

 <div class="main-content">
    <div class="wrapper"> <h1> Manage Category </h1>
                    <br>
                    <br>
                    <?php
                      if(isset($_SESSION['add']))
                      {

                             echo $_SESSION['add'];
                             unset($_SESSION['add']);
                     }
                     if(isset($_SESSION['remove']))
                     {
                        echo $_SESSION['remove'];
                        unset($_SESSION['remove']);
                     }
                     if(isset($_SESSION['delete']))
                     {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    
                     }
                    
                     
                       ?>
                       <br><br>
                       

                    <a href="<?php echo SITEURL;?>admin/add-category.php" class="btn-primary">Add Category</a>
                    <br>
                    <br>
                    <br>
                    
                    <table class="tbl-full">
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                         <!-- #region 
                        
                        
                        -->
                        <?php
                        //query to get all data 
                            $sql = "SELECT *FROM tbl_category";

                            $res = mysqli_query($conn, $sql);

                            $count = mysqli_num_rows($res);


                            if($count>0)
                            {
                            $n = 1;

                                 while($row=mysqli_fetch_assoc($res))
                                 {
                                            $id = $row['id'];
                                            $title = $row['title'];
                                            $image_name = $row['image_name'];
                                            $featured = $row['featured'];
                                            $active = $row['active'];
                                            ?>
                                             <tr>
                                                <td><?php echo $n++ ?></td>
                                                <td><?php echo $title?></td>
                                                <td>
                                                    <?php 
                                                        if($image_name!="")
                                                        {
                                                            //display image 
                                                            ?>
                                                             <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>  " width="100px" alt="">

                                                            <?php
                                                            
                                                        }
                                                        else
                                                        {
                                                           echo "<div class='error'>image Not Added</div>";

                                                        }
                                                     
                                                    ?>
                                                </td>
                                                
                                                
                                                <td><?php echo $featured?></td>
                                                <td><?php echo $active?></td>
                                                <td>
                                                <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-secondary">Update Category</a>
                                                <a href="<?php echo SITEURL; ?>admin/delete-category.php ?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>"class="btn-danger">Delete Category</a>
                                                </td>
                                            </tr>


                                          <?php





                                 }

                            }
                            else
                            {

                                    //we will display the message in  table 
                                    ?>


                                    <tr>
                                        <td colspan="6"><div class="error">No category Added.</div></td>
                                    </tr>
                                    <?php


                            }

                        ?>

                       
                       
                    </table>
        </div>
  </div>
<?php include('partials/footer.php');?>  
