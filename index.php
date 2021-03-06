<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="https://fontawesome.com/v4.7/icon/facebook-square">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="./images/logo.png" width="10%" alt="Logo"></a>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-times" onclick="hideMenu()" aria-hidden="true"></i>
                <ul>
                    <li><a href="index.php">HOME</a> </li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()" aria-hidden="true"></i>
        </nav>
    <div class="text-box"><h1><strong>HARVARD UNIVERSITY</strong></h1> 
        <p>
            Harvard University is a private Ivy League research university in Cambridge, Massachusetts..<br>

            Established in 1636 and named for its first benefactor, clergyman John Harvard, Harvard is the oldest institution of
             higher learning in the United States and among the most prestigious in the world.
        </p>
        <a href=""class="hero-btn">Visit Us To Know More</a>
    
    </div>
    </section>
    <!------- course ------->
    <section class="course">
        <h1> Courses we offer </h1>
        <p>
            We offer courses in literature , science and arts.
        </p>
        <div class="row">
            <div class="course-column">
                <h3>
                    INTERMEDIATE
                </h3>
                <p>
                    this is just a ample of how the website will look.
                </p>
            </div>
            <div class="course-column">
                <h3>
                    DEGREE
                </h3>
                <p>
                    this is just a ample of how the website will look.
                </p>
            </div>
            <div class="course-column">
                <h3>
                   POST GRADUATION
                </h3>
                <p>
                    This is just a ample of how the website will look.
                </p>
            </div>
    
        </div>
    </section>
    <!---- campus------->
    <section class="campus">
        <h1>
            OUR GLOBAL CAMPUS
        </h1>
<p> Another sample text which will be edited later on</p>
<div class="row">
    <div class="campus-column">
    <img src="images/campus.jpg">
<div class="layer">
    <h3>
        LONDON
    </h3>
</div>    
</div>
<div class="campus-column">
    <img src="images/campus2.jpg">
<div class="layer">
    <h3>
        NEW YORK
    </h3>
</div>    
</div>
<div class="campus-column">
    <img src="images/campus3.jpeg">
<div class="layer">
    <h3>
        WASHINGTON
    </h3>
</div>    
</div>
</div>
    </section>
    <!---------facilities--------->
 <section class="facilities">
     <h1>
         OUR FACILITIES
     </h1>
     <p>Random text which needs to be edited </p>
     <div class="row">
         <div class="facilities-column">
             <img src="images/library1.jpg">
             <h3>World Class Library</h3>
             <p>
                 description of the library.
             </p>
         </div>
         <div class="facilities-column">
            <img src="images/basketball.jpg">
            <h3>Largest play ground</h3>
            <p>
               description of largest play ground.
            </p>
        </div>
        <div class="facilities-column">
            <img src="images/cafeteria.jpg">
            <h3>Hygienic cafeteria</h3>
            <p>
                description of the cafeteria.
            </p>
        </div>
     </div>

 </section>   
 <!-----testimonials------>
 <section class="testimonials">
     <h1>What our student says</h1>
     <p>
         reviews of the students.

     </p>
  <div class="row">
      <div class="testimonial-column">
          <img src="images/student1.jpg">
          <div>
              <p>
                  AMAZING COLLEGE
              </p>
              <h3>Christine</h3>
              <i class="fa fa-star" ></i>
              <i class="fa  fa-star" ></i>
              <i class="fa  fa-star-o" ></i>
              



          </div>
      </div> 
      <div class="testimonial-column">
        <img src="images/student2.jpg">
        <div>
            <p>
                GOOD PLACE FOR LEARNING
            </p>
            <h3>emma</h3>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-o" ></i>

        </div>
    </div> 

  </div>
    
 </section>
 <!------call to action------->
 <section class="cta">
     <h1>
         enroll for our various courses <br>anywhere from the world
     </h1>
     <a href="" class="hero-btn">contact us</a> 
 </section>
 <!----footer---->
 <section class="footer">
     <h4>About Us</h4>
     <p>INFORMATION ABOUT THE UNIVERSITY</p>
     <div class="icons">
         <i class="fab fa-facebook"></i>
         <i class="fab fa-instagran"></i>
         <i class="fab fa-twitter"></i>
         <i class="fab fa-linkedin"></i>

     </div>
 </section>








    <!----javascript for toggle menu---->
    <script>
        var navLinks= document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>
</body>
</html>

