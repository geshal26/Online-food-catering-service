
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restro</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1487ef905e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&display=swap" rel="stylesheet"> 
    
</head>
   <body>
    

      <!-- top container for navbar and background image-->

        
        <div class="top-container">

              <!--navbar-->
              <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid pe-5">
                  
                  <a class="navbar-brand ms-lg-5 logo" href="<?php echo "http://localhost/restro/foodwebiste-main/FOOD_APPLICATION-main/index.php"; ?>" style="color:rgb(255,255,255) ;">RESTRO</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars"></i></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto me-5">
                     
                      <li class="nav-item">
                        <a class="nav-link navbartext" href="Responsive-About-Us-section-Using-Html-And-Css-master/about.html" style="color: rgb(255, 255, 255);">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link navbartext" href="contact us.html" style="color: rgb(255, 255, 255);">Contact</a>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </nav>
                  
 



              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-pause="hover">
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <h1 class="carouselhead firsthead logo">RESTRO</h1>
                        <h2>Discover the best food & drinks Near You</h2>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                            <h1 class="carouselhead">Offers you Cant refuse</h1>
                            <h2>Upto 60% off &more</h2>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <h1 class="carouselhead">Get Big savings & exclusive offers</h1>
                        <h2>During Festive seasons</h2>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>


            
                

              

        </div>


        <div class="mid-container">
            <div class="divison-head">
               
            </div>
            <!-- bootstrap cards for services -->
            <!-- used bootstrap cgrid system for responsiveness-->
            

            <div class="food-cards">    
                    <div class="card" style="width: 18rem;">
                        <img src="card1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           
                            <p class="card-text"><strong>Order in for yourself or for the group, with no restrictions on order value</strong></p>
                            <a href="<?php echo "http://localhost/restro/index.php"; ?>" class="btn btn-primary" role="button">Order Now</a>

                        </div>
                    </div>
                

                
                    <div class="card" style="width: 18rem;">
                        <img src="admin.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <a href="<?php echo "http://localhost/restro/admin/login.php"; ?>"  class="btn btn-primary" role="button"><strong>Admin</strong></a>
                           
                           
                        </div>
                    </div>
                
            </div>



        </div>
        <div class="phone-view">
            <div class="phoneimg">
                <img src="phoneapp.avif" width="300px" height="300px" alt="phonepic">
               
            </div>
            <div class="phone-desc">
               <h1 style="font-weight: 600; font-size:40px">Restaurants in your pocket</h1>
              
                <div style="margin-top: 20px; font-size: 25px; font-weight: 600;">No Minimum Order</div>
                <div style="margin-top: 20px; font-size:20px; font-weight:400;">Order in for yourself or for the group, with no restrictions on order value</div>


            </div>
        </div>
        <div class="bottom-container">
            <div class="divison-head">
    
                  <h1 class="logo"><strong>RESTRO</strong> </h1>
                
            </div>    
            <div class="address">
                <i class="fa-solid fa-location-dot"></i>
                <span>
                    NMAM Institute of Technology
                    <br>
                    Nitte-5741110,Karkala Taluk,Udupi,Karnataka -2811248
                </span>
            </div>
            <div class="feedback">
                <i class="far fa-envelope"></i>
                <span>
                    <a href="https://workspace.google.com/intl/en_in/products/gmail/" style="color:black;text-decoration: none;">restro@gmail.com</a>
                </span>
                
            </div>
        
            <div class="social-links">
                <a href="https://en-gb.facebook.com/"><i class="fa-brands fa-facebook fa-fw fa-2xl fa-circle " style="color: black;"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-fw fa-2xl fa-circle " style="color: black;"></i></a>
                <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter fa-fw fa-2xl fa-circle " style="color: black;"></i></a>
                <a href="https://www.linkedin.com/signup"><i class="fa-brands fa-linkedin fa-fw fa-2xl fa-circle " style="color: black;"></i></a>


            </div>
         </div>   
        
            


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
