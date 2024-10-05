<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donate</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="logo">Food <b style="color: #06C167;">Donate</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="about.html" >About</a></li>
                <li><a href="contact.html" >Contact</a></li>
                <li><a href="profile.php" >Profile</a></li>
                <!-- <li ><a href="fooddonate.html"  >Donate</a></li> -->
            </ul>
        </nav>
    </header>
    <script>
        hamburger=document.querySelector(".hamburger");
        hamburger.onclick =function(){
            navBar=document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
    <section class="banner">
        <a href="fooddonateform.php">Donate Food</a>
    </section>
    <div class="content">
        <!-- <h2>Love Food</h2>
        <h3>Hate Wasting</h3> -->
        <p style="font-size: 23px;">
            “Cutting food waste is a delicious way of saving money, helping to feed the world and protect the planet.” 
        </p>
       
    </div>
    <div class="photo">
        <br>
        <p class="heading">Our Works</p>
        <br>
        <p style="font-size: 28px; text-align: center;">"Look what we can do together."</p>
       <br>
        <div class="wrapper">
          <div class="box"><img src="img/p1.jpeg" alt=""></div>
          <div class="box"><img src="img/p4.jpeg" alt=""></div>
          <div class="box"><img src="img/p3.jpeg" alt=""></div>
        </div>
        <!-- <p style="font-size: 19px;"> The basic concept of this project  Food Waste Management is to collect theexcess/leftover food from donors such as hotels, restaurants, marriage halls, etc and distribute to  the  needy people .
        </p> -->
        <br>
        
    
     
        
    </div>
    <div class="deli" style="display: grid;" >
      <p class="heading">DOOR PICKUP</p>
      <br>
      <p  class="para">"Your donate will be immediately collected and sent to needy people "</p>
      <!-- Add this to the section where you want to place the form link -->
<div class="food-request-section" style="text-align: center; padding: 20px;">
  <h2>Need Food Urgently?</h2>
  <p>If you are in urgent need of food assistance, please fill out the form below:</p>
  <a href="https://docs.google.com/forms/d/e/1FAIpQLSeqCcLBF6v518SMa0HKs_W4DJoXaEVcTTD4j6b3Kflu-FGZHg/viewform" target="_blank" class="form-link">Request Food Here</a>
</div>

<!-- Styling for the form link -->
<style>
  .form-link {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
  }

  .form-link:hover {
    background-color: #45a049;
  }

  .food-request-section {
    display: flex;
    flex-direction: column;
    align-items: center; /* Centers horizontally */
    justify-content: center; /* Centers vertically */
  }
</style>

      <img src="img/delivery.gif" alt="" style="margin-left:auto; margin-right: auto;">

    </div>
    <div class="ser">
      <!-- <p class="heading">Our Services</p> -->
      
    </div>
    <footer class="footer">
        <div class="footer-left col-md-4 col-sm-6">
          <p class="about">
            <span> About us</span>The basic concept of this project  Food Waste Management is to collect the excess/leftover  food from donors such as hotels, restaurants, marriage halls , etc and distribute to  the  needy people .
     </p>
        
        </div>
        <div class="footer-center col-md-4 col-sm-6">
          <div>
            <p><span> Contact</span> </p>
            
          </div>
          <div>
        
            <p> (+00) 0000 000 000</p>
            
          </div>
          <div>
            <!-- <i class="fa fa-envelope" style="font-size: 17px;
            line-height: 38px; color:white;"></i> -->
            <p><a href="#"> Fooddonate@gmail.com</a></p>
          </div>
          
          <div class="sociallist">
            <ul class="social">
            <li><a href="https://www.facebook.com/TheAkshayaPatraFoundation/"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="https://twitter.com/globalgiving"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="https://www.instagram.com/charitism/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
            <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" style="font-size:50px;color: black;"></i></a></li>
           </ul>
          </div>
        </div>
        <div class="footer-right col-md-4 col-sm-6">
          <h2> Food<span> Donate</span></h2>
          <!-- <h2>Food donate</h2> -->
          <p class="menu">
            <a href="#"> Home</a> |
            <a href="about.html"> About</a> |
            <a href="profile.php"> Profile</a> |
            <a href="contact.html"> Contact</a>
          </p>
          <p class="name"> Food Donate &copy 2023</p>
        </div>
      </footer>

    
</body>
</html>