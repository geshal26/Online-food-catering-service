<?php
include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
         <h1>Add Category</h1>

         <br><br>

         <?php
         if(isset($_SESSION['add']))
         {

             echo $_SESSION['add'];
             unset($_SESSION['add']);
         }

         if(isset($_SESSION['upload']))
         {

             echo $_SESSION['upload'];
             unset($_SESSION['upload']);
         }


         ?>
         <br><br>
         


           <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">

                        <tr>
                                <td>Title:</td>
                                <td>
                                    <input type="text" name="title" placeholder="category-title">
                                </td>
                        </tr>


                        <tr>
                            <td>Featured:</td>
                            <td>
                                <input type="radio" name="featured" value="Yes">Yes
                                <input type="radio" name="featured" value="No">No
                            </td>

                            
                        </tr>


                        <tr>
                                <td>Active:</td>
                                <td>
                                    <input type="radio" name="active" value="Yes">Yes
                                    <input type="radio" name="active" value="No">No
                                </td>
                        </tr>
                        <tr>
                                      <td>Select Image:</td>
                                      <td>
                                        <input type="file" name="image">
                                      </td>
                           
                        </tr>

                        <tr>
                                <td colspan="2">
                                    <input type="submit"  name="submit" value="Add category" class="btn-secondary">
                                </td>
                        </tr>



                    </table>


            </form>
            <?php
            
               //check whether submit is clicked or not
               if(isset($_POST['submit']))
               {
                   // get the value form the form
                   $title = $_POST['title'];



                   //for radio type check wheter it is set or not 
                      if(isset($_POST['featured']))
                      {

                            $featured = $_POST['featured'];

                      }
                      else
                      {
                             $featured = "No";
                      }


                      if(isset($_POST['active']))
                      {

                            $active= $_POST['active'];

                      }
                      else
                      {
                             $active = "No";
                      }
                      
                
                     if(isset($_FILES['image']['name']))
                     {

                        //uplaod image 
                        //to upload image we need image name and then source paths and destination path
                           $image_name = $_FILES['image']['name'];
                        //auto rename image
 
                        //get the extension of the image
                         //upload image only if selected
                             if ($image_name != "")
                            {
                                $image_info = explode('.', $image_name);
                                $ext = end($image_info);
                                 $image_name = "Food_category". rand(000, 999).'.'.$ext;
                                $source_path = $_FILES['image']['tmp_name'];

                                $destination_path ="../images/category/".$image_name;

                                //finalyy upload image
                    
                                $upload = move_uploaded_file($source_path, $destination_path);


                                    if ($upload == FALSE)
                                  {
                                        $_SESSION['upload'] = "<div class='error'>Failed to upload image .</div>";


                                    header('location:' . SITEURL . 'admin/add-category.php');


                                //stop the process
                
                                       die();
                                 }
                            }
                       }
                       else
                     {


                        //dont upload image 
                          $image_name = "";
                     }
                      
                    

                      $sql = "INSERT INTO tbl_category SET 
                      title ='$title',
                      image_name='$image_name',
                      featured='$featured',
                      active='$active'
                           ";


                         $res = mysqli_query($conn, $sql);

                         if($res==TRUE)
                         {
                            //query exceuted and category added

                                 $_SESSION['add'] = "<div class='success'>category Added  Succesfully</div>";
                            //redirect
                                header('location:' . SITEURL . 'admin/manage-category.php');

                         }
                        else
                        {


                                $_SESSION['add'] = "<div class='error'>category Added  Succesfully</div>";
                            //redirect
                               header('location:' . SITEURL . 'admin/add-category.php');

                        }





               }



            ?>
         



    </div>

</div>



<?php include('partials/footer.php');?>
