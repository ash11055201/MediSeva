<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
 
	<title>PeopleCare</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="astyle.css" media="screen"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body>
    <?php 
        include 'dbcon.php';
        $selectquery = "select * from patientdetails ORDER BY patientid DESC LIMIT 1";
        $query = mysqli_query($con,$selectquery);
        $nums = mysqli_num_rows($query);
        $res = mysqli_fetch_array($query);
        $selectquery2 = "select * from schedule ORDER BY scheduleid DESC LIMIT 1";
        $query2 = mysqli_query($con,$selectquery2);
        $nums2 = mysqli_num_rows($query2);
        $res2 = mysqli_fetch_array($query2);
        if(isset($_POST["submit1"])){
            ?>
            <script>
                location.replace("http://localhost:3000");
            </script>
            <?php
        }
    ?>
	<header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="logo.jpg" alt="">
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
                        <a href="schedule.php"><button class="btn btn-success" >Book an Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>

    </header>
   
    <div>
    	<div class="row">
    		<div class="banner">
    		<img src="assets/images/aboutus/aboutusimg5.jpg" alt="" style="">
            <h1 class="heading">About Us</h1>	
            <p class="vision">Vision</p>
            <p class="visiontext">Create a Healthier India for Everyone</p>
            <p class="mission">Mission</p>
            <p class="missiontext">Relevant, Trusted and Accessible Health Care</p>
            <p class="values">Values</p>
            <p class="valuestext">Quality, Compassion & Care</p>
    		</div>
    	</div>
    </div>
    <br><br><br><br>
    <div class="team-section">
        <h1>Our Team</h1>
        <span class="border"></span>
        <div class="ps">
        <a href="#p1"><img src="assets/images/aboutus/Dost1.jpeg"  alt=""></a> 
    <a href="#p2"><img src="assets/images/aboutus/Dost2.jpeg" alt="" style="width: 246px;height: 323px"></a> 
        <a href="#p3"><img src="assets/images/aboutus/Dost3.jpg" alt=""  style="width: 246px;height: 323px"></a>   
        </div>
        <div class="section" id="p1">
            <span class="name">Lohitaksh Rewari</span>
            <span class="border"></span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        </div>  
         <div class="section" id="p2">
            <span class="name">Rishabh Singh</span>
            <span class="border"></span>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
        </div>  
         <div class="section" id="p3">
            <span class="name">Venkatesh Naidu</span>
            <span class="border"></span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here</p>
        </div>     
    </div>
    <br><br><br>

    <div class="row">
        <div class="">
        <img src="assets/images/aboutus/bridge.jpeg" alt="" style="height: 680px; width: 2000px;">
        <h1 class="heading2"><span class="rect">Brand Philosophy & Beliefs</span></h1>
    </div>
    </div>
<div class="bpb">
    <div class="container">
        <div class="box">
       <i class="glyphicon glyphicon-star"></i><br><br>
       <h1 style="font-size: 3rem;color: #004080">Our Brand Values</h1><br>
       <p style="font-size: 2rem;color: black;">Think Customers. Think Team. Think Healthcare.</p><br>
       <p>PeopleCare Health aspires to improve overall healthcare experience of people. “Healthcare accessibility and affordability for all” is one of our basic tenets. We at PeopleCare believe that the trade of our customers, doctors and team are equally invested in enabling simple, transparent and trustworthy healthcare services that are within everyone’s reach. </p>
        </div>
        <div class="box">
            <span class="glyphicon glyphicon-heart "></span> <br><br>
            <h1 style="font-size: 3rem;color: #004080">Our Philosophy</h1><br>
            <p style="font-size: 2rem;color: black;">Better Health. Better Care. Better Reach.</p><br>
            <p>Health matters! PeopleCare is built on the philosophy that people should live a happier, healthier and more productive life. Everyone is entitled to qualitative medical care. It should be accessible, affordable and available at all times. Our endeavor is to provide innovative solutions which are user-friendly and simplify lives.</p>
        </div>
        <div class="box">
            <i class="glyphicon glyphicon-eye-open"></i><br>
            <h1 style="font-size: 3rem;color: #004080">Our Beliefs</h1><br>
            <p style="font-size: 2rem;color: black;">Gender Equality. Work Transparency.</p><br>
            <p>Our beliefs extend to mutual respect, gender, equity, work place transparency and openness to disruptive and sustainable solutions that will help achieve the organization’s goals and individual growth. We are simple, honest and highly approachable.</p>

        </div>
    </div>
      </div>
</div>

</body>
</html>
