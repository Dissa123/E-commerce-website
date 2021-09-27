<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="footer/footer.css">
  <!-- <link rel="stylesheet" href="se.css"> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <div class="container">
    <!--Navigation bar HTML code-->
    <nav>
      <input type="checkbox" id="check" />
      <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <!----->
        <i class="fas fa-times" id="cancel"></i>
        <!--X-->
      </label>
      <h1>BOYS</h1>

      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="aboutUs/aboutus.php">ABOUT</a></li>
        <li><a href="./adminPannel/products/img.php">SHOP</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <a href="login.php"><i class="fas fa-user-circle" style="font-size: 1.7em; color:black;transition: transform 1s"></i></a>
      <i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 1.7em"></i>
    </nav>
  </div>

  <!--Home img-->
  <div class="ho">
    <div class="twoo">
      <img src="img/man.png" class="man" data-aos="fade-right" />
    </div>


    <div class="word">
      <h1 class="one" data-aos="fade-left">BOYS</h1>
      <h1 class="two" data-aos="fade-right">STYLES</h1>
    </div>
  </div>


  <!--Home descriptiom-->

  <div class="hero">
    <div class="one">
      <div class="text">
        <h1 data-aos="fade-right">CASUAL SHIRTS</h1>
        <p data-aos="fade-right">Come and take your dream T-shirts</p>
        <form action="./adminPannel/products/casuals/casualShirt.php">
          <button data-aos="fade-right">SHOP NOW</button>
        </form>
       
      </div>
      <div class="img">
        <img src="img/t-shirt.jpg" style="height: 600px;" data-aos="fade-left">
      </div>
    </div>



    <div class="two">
      <div class="text2" data-aos="fade-left">
        <h1>FOMAL SHIRT</h1>
        <p>Come and take your dream Fomal shirts</p>
        <form action="./adminPannel/products/fomal shirt/fomal.php">
            <button>SHOP NOW</button>
        </form>
        
      </div>
      <div class="img2" data-aos="fade-right">
        <img src="img/f1.jpg" style="height: 600px" />
      </div>
    </div>

    <div class="three">
      <div class="text3" data-aos="fade-right">
        <h1 style="position: relative; right: 1rem">T-SHIRT</h1>
        <p>Come and take your dream T-shirts</p>
        <form action="./adminPannel/products/tshirt/tshirt.php">
            <button>SHOP NOW</button>
        </form>
       
      </div>
      <div class="img3" data-aos="fade-left">
        <img src="img/2.jpeg" style="height: 600px" />
      </div>
    </div>
  </div>

  <div class="contact">
    <h1>CONTACT US</h1>

    <!--Message-->

    <?php
    if (isset($_GET["error"])) { //link use
      echo "<script>
                  swal('Loging Fail!', 'Your message...', 'error');
               </script>";
    }

    if (isset($_GET["success"])) {
      echo "<p class='t'>Your message was sent successfully</P>";
    }
    ?>

    <div class="f">
      <form action="Home.php" method="post">
        <input type="text" name="text" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <textarea class="Message" name="Message" placeholder="Message" style="height: 10rem; font-family: 'Nunito Sans', sans-serif;"></textarea><br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required>
        <label for="vehicle1"> By clicking on this,you have agreed to accept our <a href="term.php">Term & Conditions</a> or <a href="pri.php">Privacy Policy.</a></label><br>
        <input type="submit" name="send" value="Send">
      </form>


    </div>
  
   
  </div>


  <?php include_once 'footer/footer.php';?>
  <?php
  if (isset($_POST["send"])) {
    $name = $_POST["text"];
    $email = $_POST["email"];
    $message = $_POST["Message"];

    //check all are fill
    if (empty($name) || empty($email) || empty($message)) {
      header("location:Home.php?error");
      //link genarate
    } else {

      $to = 'boys123.style@gmail.com';
      $subject = "New Form Submission";
      $email_body = "Message from Contact us page of the website: <br>";
      $email_body .= "<b>From:</b> {$name} <br>";
      $email_body .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

      $header = "From: {$email}\r\nContent-Type: text/html;";




      $send_mail_result = mail($to, $subject, $email_body, $header);

      if ($send_mail_result) {

        header("location:Home.php?success");
        echo "sent";
      } else {
        echo "not sent";
      }
    }
  }



  ?>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 40,
      duration: 1000

    });
  </script>



</body>
</html> 

