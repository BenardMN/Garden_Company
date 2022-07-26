<!-- Designer: Bernard Munuve  -->
<?php

//initialize session
session_start();

//check if user is logged in, if not redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html><head>
     <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="keywords" content="pests,weeds,fungus,vegetables,fruits,flowers,grow, crop">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" type="text/css" href="w3css-master/w3.css">
     <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
     <style>
          .colortext {
               color: white;
          }
          body {
               background: rgb(250, 250, 250);
          }
          h1, h3, h5, p {
               text-align: center;
          }
     </style>
     <title>The Garden Company</title>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
     <nav class="w3-bar w3-teal">
          <div class="w3-bar-item w3-button w3-hover-purple">
               <span id="openNav" class="w3-large w3-button">
                    <img src="Images/go-home-5.png" width="30" height="30">
                    <a href="#"></a>
               </span>
          </div>
          <a href="Index.html" class="w3-bar-item w3-button w3-hover-purple">Home</a>
          <div class="w3-dropdown-hover">
               <a href="#" class="w3-bar-item w3-button w3-hover-purple">Tips And Tricks</a>

               <!-- A drop down menu -->
               <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#" class="w3-bar-item w3-button">Planting</a>
                    <a href="#" class="w3-bar-item w3-button">Weeding</a>
                    <a href="#" class="w3-bar-item w3-button">Transplanting</a>
                    <a href="#" class="w3-bar-item w3-button">Harvesting</a>
                    <a href="spray.html" class="w3-bar-item w3-button">Spraying</a>
                    <a href="Glossary.html" class="w3-bar-item w3-button">Glossary</a>
               </div>
          </div>
          <a href="foliage.html" class="w3-bar-item w3-button w3-hover-purple">Problem-Solving</a>
          <a href="Contact.html" class="w3-bar-item w3-button w3-hover-purple">Contact us</a>
          <a href="Gallery.html" class="w3-bar-item w3-button w3-hover-purple">Gallery</a>
          <input type="text" class="w3-bar-item w3-input" placeholder="Search ...">
          <a href="#" class="w3-bar-item w3-button ">&#128269;</a>
          <div class="mt-lg-0 mt-3 mb-4 mb-lg-0">
               <a href="#" class="custom-btn btn" download>Download Newsletter</a>
          </div>
     </nav><br>
     <nav class="main">
          <div>
               <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">
                    <div class="container">
                         <div class="row">
                              <div class="mx-auto col-lg-5 col-md-5 col-10">
                                   <img src="Images/lap.png" class="img-fluid">
                              </div>
                              <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                                   <div class="hero-text">
                                        <h1 class="hero-title">GARDEN COMPANY</h1>
                                        <p>We are a farming company that has patnered with all farmers throughout the country to improve their farming practices and add  value to farming produce.</p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </section>
               <section class="about section-padding" id="about">
                    <div class="container">
                         <div class="row">
                              <div class="col-lg-6 col-md-6 col-12">
                                   <h3 class="mb-4">About Our COMPANY</h3>
                                   <p>We educate farmers new farming methods, use of new machines, how to process produce, animaml care. We also buy their produce ond connect them to buyers.</p><br>
                                   <p>We buy fruits from farmers and are used to make juice which is exported. Our juice is explictly from fruits no additives added.</p>
                              </div>
                              <div class="col-lg-5 mx-auto col-md-6 col-12">
                                   <img src="images/g1.jpg" class="about-image img-fluid" alt="Garden Company" width="400" height="400">
                              </div>
                         </div>
                         <div class="row about-third">
                              <div class="col-lg-4 col-md-4 col-12">
                                   <h3>Monthly Magazine</h3>
                                   <p>We publish a monnthly newsletter to educate farmers on good farming practices. We sell it at a subsidized price of Ksh 50 per copy at our offices. It is also available in our website where you can dowload it<br>
                                   <a href="magazine.html"><u>read more</u>...</a></p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12">
                                   <h3>Coffee workshop</h3>
                                   <p>There's an upcoming coffee workshop at our main office in Machakos Town, opposite Total petrol station on 24<sup>th</sup>July. We will have officers from the Ministry of Agriculture and also from KARI. We will discuss how to improve our coffee growing, picking ripe berries, pest control, prunning and much more. All are welcome!<a href="#"><u>Register today!</u></a></p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12">
                                   <h3>Agri Drones</h3>
                                   <p>Imagine sending a drone to inspect your 10 acre farm from the comfort of your house. Thanks to technology this is now possible. We sell and install AgriDrones in your farms and educate you on how to use them. Visit our offices to get one.<a href="#"><u>read more</u>...</a></p>
                              </div>
                         </div>
                    </div>
               </section>
          </div>
          <div class="w3-container w3-teal" align="center">
               <footer class="w3-footer">
                    <p class="colortext">Copyright &copy; 2021 Garden Company &trade;</p>
               </footer>
          </div>
     </nav>
</body></html>