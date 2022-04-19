<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head> 
 
	<title>Home Page</title>
   <meta charset="utf-8">
	    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="patienthomestyle.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
	<header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img ">
                        <img src="logo2.jpg" alt="" style="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="patienthome.php">Home</a></li>
                            <li><a href="treat.php">What we Treat</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                       <a href="schedule.php"><button class="btn btn-success">Book an Appointment</button></a>
                    </div>
                </div>

            </div>
        </div>
    </header>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/images/slider/slider_3.jpg" alt="Los Angeles"  style="height: 580px;width: 100%">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>

      <div class="item">
        <img src="assets/images/slider/slider_1.jpg" alt="Chicago" style="height: 580px;width: 100%">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
    
      <div class="item">
        <img src="assets/images/slider/s2.jpeg" alt="New york"style="height: 580px;width: 100%">
        <div class="carousel-caption d-none d-md-block">
       
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br><br><br>
<div class="half-circle"></div>
<h1 style=" position: absolute;top: 850px;;color: black">Talk to a Doctor  </h1><br>
<h1 style=" position: absolute;top: 900px;;color: black">Within Minutes</h1>
<p style="position: absolute;top: 1000px;text-indent: 1000px;font-size: 3rem;color: black">Access Top Doctors for Online </p>
<p style="position: absolute;top: 1050px;text-indent: 1000px;font-size: 3rem;color: black">Consultations from Anywhere,</p> 
<p style="position: absolute;top: 1100px;text-indent: 1000px;font-size: 3rem;color: black">Anytime through Video Chat.</p>
<div class="appoint" style="position: absolute;top: 1200px; left:1000px;">
  <a href="schedule.php">
   <button class="btn btn-success" style="width:300px;height: 60px;font-size: 2rem;">Book an Appointment</button></a>
  </div><br><br><br><br>
  <div class="box"><p class="medp1">Our doctors can diagnose and prescribe medicines for many health issues like cold</p> <p class="medp2">and flu symptoms, allergies, rash, skin problems and more! Here is a sample of </p><p class="medp3">some of the medical conditions we treat.</p>
    <div class="row">
      <div class="column">
        <h3 style="font-size: 25px;color: white;position: absolute;top: 130px;left: 40px;"><u>Primary care</u></h3>
        <div class="medp4">
          <p>Acne</p><br>
          <p>Allergies</p><br>
          <p>Fever</p><br>
          <p>Cold, Flu & RTIs<br>
      (Respiratory Tract Infections)</p><br>
        <p>Sinusitis</p><br>
        <p>Bruising</p><br>
        <p>Childhood Infections</p><br>
        <p>Eye Problems</p><br>
        <p>Conjunctivitis</p><br>
    </div>
      </div>
      <div class="column">
        <h3 style="font-size: 25px;color: white;position: absolute;top: 130px;left: 350px;">
          <u>LifeStyle Diseases</u></h3>
          <div class="medp5">
          <p>Asthma</p><br>
          <p>Diabetes</p><br>
          <p>Hypertension</p><br>
          <p>Obesity</p><br>
          <p>Pneumonia</p><br>
          <p>Heart Diseases</p><br>
          <h3 style="font-size: 25px;color: white;position: absolute;top: 230px;left: 0px;">
          <u>PrivateIssues</u></h3>
          <div class="medp6">
            <p>Hair Fall</p><br>
            <p>Itchy Scalp</p><br>
            <p>Oily Skin</p><br>
          </div>
        </div>
        <a href="treat.php">
        <button class="btn btn-success" style="width:300px;height: 60px;font-size: 2rem;position: absolute;top: 490px;left: 580px;">See Everything We Can Treat</button></a>
      </div>
    </div>
  </div>
  <div class="box2"><p style="font-size: 40px; position: absolute;top: 40px;left: 40px;">Medical </p><br>
                     <p style="font-size: 40px; position: absolute;top: 90px;left: 40px;"> Conditions </p> <br>
                    <p style="font-size: 40px; position: absolute;top: 140px;left: 40px;">We Treat</p></div>
  <div class="condimg">
    <img src="assets/images/home/sneeze.jpg" alt="" style="width: 300px;height: 150px;position: absolute;top: 1600px;left: 1150px;">
      
      <img src="assets/images/home/cough.jpg" alt="" style="width: 200px;height: 200px;position: absolute;top: 1850px;left: 930px;">
      <img src="assets/images/home/fever.jpg" alt="" style="width: 350px;height: 200px;position: absolute;top: 1750px;left:1130px;">
  </div>
  <div class="rsection">
  <div class="rev-section">

<h2 class="title" style="font-size:45px;color: black">From Our Users</h2>

<div class="reviews">

<div class="review">
   <div class="head-review">
      <img src="assets/images/aboutus/Dost1.jpeg" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Lohitaksh Rewari</div>
      <div class="place-review">India</div>
      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half"></i>
      </div>
      <div class="desc-review">Awesome services, really helpful for mysel & my family in getting prompt medical conultation. Doctor's way of treating is very good, it really saves time as going to hospital is really difficult now a days.Thanks,PeopleCare for providing such an amazing service.</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="assets/images/aboutus/Dost2.jpeg" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Rishabh Singh</div>
      <div class="place-review">India</div>
      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
      </div>
      <div class="desc-review">Very useful and handy app. It proved to be very handy when I was travelling. A video consultation with the doctor and following his advice got me back on the health track in no time. Thanks PeopleCare! </div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="assets/images/aboutus/Dost3.jpg" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Venkatesh Naidu</div>
      <div class="place-review">India</div>
      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half"></i>
      </div>
      <div class="desc-review">I am new to Mumbai and I live in hostel.I recall an instance when I was having high fever and didn't know what to do, that is when I got to know about the PeopleCare and used it to consult a doctor.Thanks to PeopleCare and got cured very quickly.</div>
   </div>
</div>

</div>

</div>
</div>
  
  <div class="meditext">
    <h1 class="medtitle1">What is PeopleCare?</h1>
    <p class="medp7">PeopleCare is an Online Doctor Consultation Platform where one can have a live chat with a doctor on Web/App. This virtual doctor app provides easy access to a GP online via audio, video or chat, as per the customer’s convenience.</p>
   <!--  <p class="medp8">Any registered user can book doctor appointment online where they can undertake online medical consultation, seek  online doctor advice,<br> get online prescriptions.</p> -->
    <!-- <p class="medp9">Our Objectives are to ensure Healthcare accessibility to consumers, which is simple, transparent and available anytime/anywhere. </p>
    <h1 class="medtitle2">Why PeopleCare?</h1>
    <p class="medp10">Healthcare reach has always been a challenge across the globe and especially in India. We understand Healthcare accessibility and <br>affordability should be one of the basic tenets available to all human beings. It is on this idea that PeopleCare has been built.</p> -->
</div>
<div class="box3">
  <h1 class="footertext">PeopleCare Health India</h1>
  <p class="ft1">Mumbai</p>
  <p class="ft2">near Old London Pilsner Brewery,<br> Sector 7, Nerul(E, Navi Mumbai,<br> Maharashtra) 400706</p>
  <p class="ft3">Email Id</p>
  <p class="ft4">PeopleCare@gmail.com</p>
   <p class="ft5">Mobile Number</p>
  <p class="ft6">+91 1234567896</p>
  <p class="ftgly"><a href="#" class="fa fa-facebook" style="font-size: 30px;"></a><a href="#" class="fa fa-twitter" style="font-size: 30px;"></a><a href="#" class="fa fa-linkedin" style="font-size: 30px;"></a>
<a href="#" class="fa fa-youtube" style="font-size: 30px;"></a>
<a href="#" class="fa fa-instagram" style="font-size: 30px;"></a></p>
</div>
</body>
</html>