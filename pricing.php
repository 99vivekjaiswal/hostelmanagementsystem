<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images/nitjsr.png" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>

      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header">Hostel J</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="images/hostel-j.jpg" alt="">
    </div>

    <li class="grey">1Lakh/ year</li>
    <li>Best Internet</li>
    <li>Central AC block</li>
    <li>Best Mess</li>
    <li>World class facilities</li>
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Hostel K</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/hostel-k.jpeg" alt="">
</div>

<li class="grey">85 Thousand/ year</li>
<li>AC block</li>
<li>Common reading room</li>
<li>Indoor games</li>
<li>GYM</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">Hostel B</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/hostel-rlb.jpg" alt="">
</div>

<li class="grey">70 Thousand/ year</li>
<li>Ac block</li>
<li>Gym</li>
<li>Swimming pool</li>
<li>AC Gym</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Hostel I</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/hostel-i.jpeg" alt="">
</div>

<li class="grey">50 Thousand/ year</li>
<li>Non-Ac block</li>
<li>8 ball pool </li>
<li>comfortable living area</li>
<li>Free wifi</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

      </div>
    </div>

  </body>
</html>
