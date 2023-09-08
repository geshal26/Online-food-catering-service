<?php include('partials/menu.php');?>
<?php 
    if(isset($_GET['id']))
    {
         $id = $_GET['id'];
    $sql2 = "SELECT * FROM tbl_food WHERE id=$id";
    $res2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($res2);

    $title = $row2['title'];
    $description = $row2['description'];
    $current_image = $row2['image_name'];
    $current_category = $row2['category_id'];
    $price = $row2['price'];
    $featured = $row2['featured'];
    $active = $row2['active'];
    }
    else{
    header('location:' . SITEURL . 'admin/manage-food.php');
    }
?>
<div class="main-content">
     <div class="wrapper">
           <h1>Update Food</h1>
           <br><br>

           <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" value=<?php echo $title;?>>
                    </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description"  cols="30" rows="5"><?php echo $description; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price" value="<?php echo $price;?>">
                    </td>
                </tr>
                <tr>
                    <td>Current Image:</td>
                    <td>   
                        <?php
                           if($current_image=="")
                           {
                            echo "<div class='error'>Image not available</div>";
                           }
                           else
                           {
                              ?>
                              <img src="<?php echo SITEURL;?>images/food/<?php echo $current_image;?>" width="150px">
                              <?php
                           }
                        ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>Select New Image:</td>
                    <td>
                        <input type="file" name="image" id="">
                    </td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>
                       <select name="category" >
                           <?php
                           $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                           $res = mysqli_query($conn, $sql);
                           $count = mysqli_num_rows($res);
                           if($count>0)
                           {
                               while ($row = mysqli_fetch_assoc($res))
                                {
                                   $category_title = $row['title'];
                                   $category_id = $row['id'];
                                   ?>
                                   <option <?php if($current_category==$category_id){ echo "selected";}?> value="<?php echo $category_id; ?>"><?php echo $category_title;?></option>
                                   <?php 
                                    
                                }

                           }
                           else
                           {
                               echo "<option value='0'>Category Not Available</option>";
                           }

                          ?>
                       </select>
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input <?php if ($featured == "Yes") {echo "checked";}?> type="radio" name="featured" value="Yes">Yes
                        <input <?php if ($featured == "No") {echo "checked";}?>type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input <?php if ($active == "Yes") {echo "checked";}?> type="radio" name="active" value="Yes">Yes
                        <input <?php if ($active == "No") {echo "checked";}?> type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                       <input type="submit" name="submit" class="btn-secondary">
                    </td>
                </tr>
            </table>

           </form>
           <?php
            if(isset($_POST['submit']))
            {
               $id = $_POST['id'];
               $description = $_POST['description'];
               $price = $_POST['price'];
               $current_image = $_POST['current_image'];
               $category = $_POST['category'];
               $featured = $_POST['featured'];
               $active = $_POST['active'];

               if(isset($_FILES['image']['name']))
               {
                   $image_name = $_FILES['image']['name'];

                   if($image_name!="")
                   {

                        $image_info=explode('.',$image_name);
                       $ext=end($image_info);
                       $image_name = "Food-name-" . rand(0000, 9999) . '.' . $ext;
                       $src = $_FILES['image']['name'];
                       $dest = "../images/food/" . $image_name;

                       $upload = move_uploaded_file($src, $dest);
                       
                       if($upload==false)
                       {
                           $_SESSION['load'] = "<div class='error'>Failed to Upload Image</div>";
                           header('location:'.SITEURL.'admin/manage-food.php');
                           die();
                       }
                   
                      if($current_image!="")
                      {
                          $remove_path = "..images/food/" . $current_image;
                          $remove=unlink($remove);
                          if($remove==false)
                          {
                              $_SESSION['remove-failed'] = "<div class='error'>Failed to remove Current Image</div>";
                              header('location:' . SITEURL . 'admin/manage-food.php');
                              die();
                         }
                     } 
                  }  
                  else
                  {
                      $image_name = $current_image;      //default image when image is not selected
                  }
               }
               else
               {
                   $image_name = $current_image;        //default image when button is not clicked
               }
               
            $sql3 ="UPDATE tbl_food  SET 
                title='$title' ,
                description ='$description',
                price=$price,
                image_name='$image_name',
                category_id='$category',
                featured='$featured',
                active='$active'
                WHERE id=$id ";

               $res3 = mysqli_query($conn, $sql3);
               if($res3==true)
               {
                   $_SESSION['food'] = "<div class='success'>Food updated Successfully</div>";
                   header('location:' . SITEURL . 'admin/manage-food.php');
               }
               else{
                $_SESSION['food'] = "<div class='success'>Failed to update Food </div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
               }
            }
        

           ?>
     </div>
</div>

<?php include('partials/footer.php');?>
