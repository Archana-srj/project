<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = $_POST['number'];
  $date = $_POST['date'];

  $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
  VALUES('$name','$email','$number','$date')") or die('query failed');
  
  if($insert){
   $message[] = 'appointment made successfully!';
  }else{
    $message[] = 'appointment failed';
  } 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design Tutorial</title>

    <!--font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--bootstrap cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    
    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- custom js file link -->
<script src="javascript.js"></script>

<!-- header section start -->

<header class="header fixed-top">
  
   <div class="container">
   <div class="row align-items-center justify-content-between">

   <a href="#home" class="logo">Dental <span>Care.</span></a>

   <nav class="nav">
     <a href="#home">Home</a>
     <a href="#about">About</a>
     <a href="#Service">Services</a>
     <a href="#reviews">review</a>
     <a href="#contact">contact</a>
   </nav>

 <a href="#contact" class="link-btn">make appointment</a>
    
   <div id="menu-btn" class="fas fa-bars"></div>
   

  </div>


   </div>

</header>


<!-- header section end -->

<!-- home section starts-->

<section class="home" id="home">
  <div class="container">

    <div class="row min-vh-100 align-items-center">

      <div class="content text-center text-md-left">
        <h3>let us brighten your smile</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
        <a href="#contact" class="link-btn">make appointment</a>
      </div>

    </div>

  </div>

</section>

<!-- home section ends-->

<!--about section starts-->

<section class="about" id="about">

  <div class="container">

    <div class="row align-items-center">

      <div class="col-md-6 image">
        <img src="images/pic2.jpg" class="w-100 md-5 mb-md-0" alt="">
      </div> 
      
      <div class="col-md-6 content">
        <span>about us</span>
        <h3>True Healthcare for Your Family</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum soluta vitae
          dolores at molestiae accusantium deleniti enim facils modi nostrum.dolor sit amet consectetur adipisicing elit. deleniti enim facils modi nostrum. </p>
         <a href="#contact" class="link-btn">make appointment</a>
      </div>

    </div>



</div>

</section>

<!--about section ends-->

<!--service section starts-->

<section class="services" id="services">
  
  <h1 class="heading">our services</h1>
  <div class="box-container container">
    
    <div class="box">
      <img src="images/icon1.png" alt="">
      <h3>Alignment Specialist</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
    </div>
  

  <div class="box">
      <img src="images/icon2.png" alt="">
      <h3>Cosmetic Dentist</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
  </div>

  <div class="box">
      <img src="images/icon3.png" alt="">
      <h3>Oral Hygiene Experts</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
  </div>

  <div class="box">
      <img src="images/icon4.png" alt="">
      <h3>Root Canal specialist</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
  </div>

  <div class="box">
      <img src="images/icon-5.png" alt="">
      <h3>Live Dental Advisory</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
  </div>

  <div class="box">
      <img src="images/icon-6.png" alt="">
      <h3>Cavity Inspection</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, non?</p>
  </div>

</div>
</section>

<!--service section ends-->

<!--process section starsts-->

<section class="process">
  <h1 class="heading">work process</h1>

  <div class="box-container container">

     <div class="box">
      <img src="images/process-1.png" alt="">
      <h3>Cosmetic Dentistry<h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, non?</p>
     </div>

     <div class="box">
      <img src="images/process-2.jpg" alt="">
      <h3>pediatric Dentistry<h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, non?</p>
     </div>

     <div class="box">
      <img src="images/process-3.jpg" alt="">
      <h3>Dental Implants<h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, non?</p>
     </div>

  </div>

</section>

<!--process section ends-->

<!--reviews section starsts-->

<section class="reviews" id="reviews">

  <h1 class="heading"> satisfied clients</h1>
  <div class="box-container container">

     <div class="box">
      <img src="images/img-1.jpeg" alt="">
      <p>Lorem, ipsum dolor sit amet consecteture adipisicing. Eos, iure? Nemo est
        aspernatur voluptatum id, laboriosam asperiores iure alias?</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Bhondu Mishra</h3>
      <span>satisfied client</span>
    </div>

    <div class="box">
      <img src="images/img-2.jpg" alt="">
      <p>Lorem, ipsum dolor sit amet consecteture adipisicing. Eos, iure? Nemo est
        aspernatur voluptatum id, laboriosam asperiores iure alias?</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Amita Chaudhary</h3>
      <span>satisfied client</span>
    </div>

    <div class="box">
      <img src="images/img-3.jpeg" alt="">
      <p>Lorem, ipsum dolor sit amet consecteture adipisicing. Eos, iure? Nemo est
        aspernatur voluptatum id, laboriosam asperiores iure alias?</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Archana saroj</h3>
      <span>satisfied client</span>
    </div>

  </div>

</section>

<!--reviews section ends-->

<!--contact section starts-->

<section class="contact" id="contact">

<h1 class="heading">make appointment</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php
     if(isset($message)){
      foreach($message as $meassage){
        echo '<p class="message">'.$message.'</p>';
      }
     }
   ?> 
    <p class="message">testing message box</p>
    <span>your name</span>
    <input type="text" name="name" placeholder="Enter your name" class="box" required>
    <span>your email</span>
    <input type="email" name="email" placeholder="Enter your email" class="box" required>
    <span>your number</span>
    <input type="number" name="number" placeholder="Enter your number" class="box" required>
    <span>appointment date : </span>
    <input type="datetime-local" name="date" class="box" required>
    <input type="submit" value="make appointment" name="submit" class="link-btn">
</form>

</section>

<!--contact section ends-->

<!--footer section starts-->



<!--footer section ends-->

<section class="footer">

  <div class="box-container container">
    
     <div class="box">
      <i class="fas fa-phone"></i>
      <h3>phone number</h3>
      <p>964-877-7644</p>
      <p>969-600-8375</p>
     </div>

     <div class="box">
      <i class="fas fa-map-marker-alt"></i>
      <h3>our address</h3>
      <p>Lalganj, Pratapgarh - 230132</p>
     </div>

     <div class="box">
      <i class="fas fa-clock"></i>
      <h3>opening hour</h3>
      <p>00:07am to 10:00pm</p>
    </div> 

     <div class="box">
      <i class="fas fa-envelope"></i>
      <h3>email address</h3>
      <p>archanasaroj710@gmail.com</p>
      <p>arsaroj753@gmail.com</p>
     </div>

  </div>

  <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>ms. web designer Archana Saroj</span>  </div>

</section>

<!--Custom js file link -->

<script src="javascript.js"></script>

</body>

</html>