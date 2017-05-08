<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="toolbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<link rel="import" href="toolbar.html">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="slider.css">
 	<link rel="stylesheet" href="style.css"/>
  <script src="javascript.js"></script>
</head>

<title>
	M-Hotle
</title>

<!-- This style is for toolbar from W3School -->
<style>
  body {margin: 0;}

  ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    font-size: 20px;
  }

  ul.topnav li {float: left;}

  ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 30px;
    text-decoration: none;
  }

  ul.topnav li a:hover:not(.active) {background-color: #78909C;}

  ul.topnav li.right {float: right;}

  @media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
  }
</style>

<!-- Toolbar ends here -->



<!-- Sliding toolbar starts here -->

<style>
  
  body {
    font-family: "Lato", sans-serif;
    font-size: 20px;
  }

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #263238;
    overflow-x: hidden;
    transition: 0.75s;
    padding-top: 60px;
  }

  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #FFFFFF;
    display: block;
    transition: 0.75s;
    text-align: left;
  }

  .sidenav a:hover, .offcanvas a:focus{
    color: #78909C;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

</style>

<!-- Sliding toolbar ends here -->



<!-- Image Slider -->

<style>

  #container{
    width:100%;
    height: 1000px;
    border:1px solid black;
    margin: 0 auto;
    position: relative;
  }

  #container>img{
    width:100%;
    height: 100%;
    position: absolute;
  }

  #container>.btn{
    position: absolute;
    width: 100px;
    height: 100px;
    border: none;
    border-radius: 35px;
    top:400px;
    background: black;
    color: white;
    font-size: 75px;
  }

  #container>#btn1:hover{
    box-shadow: 10px 0px 20px 0px black;
  }

  #container>#btn2:hover{
    box-shadow: -10px 0px 20px 0px black;
  }

  #container>#btn2{
    position: relative;
    float: right;
  }

</style>

<!-- /Image Slider -->





<body>

  <!-- Navigation Bar -->

  <div id="mySidenav" class="sidenav" style="overflow: auto;padding-bottom: 150px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <style>
      .mySlides {display:none}
      .w3-left, .w3-right, .w3-badge {cursor:pointer}
      .w3-badge {height:13px;width:13px;padding:0}
    </style>
  
    <a style="font-size: 30px;"><b><i>Menu</i></b></a>
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Our Hotels</a>


    <br>
    <br>

  
    <a style="font-size: 30px;"><b><i>Services</i></b></a>
    <a href="#">Resturant and Bars</a>
    <a href="#">Meeting and Events</a>
    <a href="#">Weddings</a>
    <a href="#">Offers</a>
  
    <br>
    <br>

  
    <a style="font-size: 30px"><b><i>Others</i></b></a>
    <a href="#">Development</a>
    <a href="#">Cereer</a>
    <a href="#">Contact Us</a>

    <br>
    <br>

    <a style="font-size: 30px"><b><i>My Profile</i></b></a>
    <a href="login/">Log in</a>
    <a href="register/">Sign up</a>


  </div>


  <ul class="topnav">


    <li><a> 
      <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>

      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "35%";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
       }
      </script>
    </a></li>

    <li><a href="#home">Home</a></li>
    <li><a href="#news">Our Hotels</a></li>
    <li class="right"><a href="#about">About</a></li>
    <li class="right"><a href="#contact">Contact Us</a></li>
    <li class="right"><a href="#contact">Book My Stay</a></li>
  </ul>

  <!-- /Navigation Bar -->



  <!-- Slider -->

  <div id="container">
  <img class="slides" src="image/image_1.jpg"/>
  <img class="slides" src="image/image_2.jpg"/>
  <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
  <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>

</div>

<script>
  var index = 1;

  function plusIndex(n){
  index = index + 1;
  showImage(index);
  }

  showImage(1);

  function showImage(n){
  var i;
  var x = document.getElementsByClassName("slides");

  if(n > x.length){ index = 1};
  if(n < 1){ index = x.length};

  for(i=0;i<x.length;i++)
  {
    x[i].style.display = "none";
  }

  x[index-1].style.display = "block";
  }

  autoSlide();
  
  function autoSlide(){
    var i;
    var x = document.getElementsByClassName("slides");
    
    for(i=0;i<x.length;i++){
      x[i].style.display = "none";
    }
  index++;

  if(index > x.length){index = 1}
  
  x[index-1].style.display = "block";
  
  setTimeout(autoSlide,5000);

 }

</script>

<!-- /Slider -->



<!-- Room Avability -->

<div class="row" style="background-color: #CFD8DC;margin-top: 50px;padding-bottom: 100px;">

  <div class="row">
      <div class="col-md-1">  </div>
      
      <div class="col-md-10" style="text-align: center;font-size: 40px;margin-top: 3%;"> 
        <b><i> Check Room Availability </i></b> 
      
        <div id="Availability_form">
        
        <style>
          hr { 
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 2px;
            color: #000000;
          }   
        </style>
        
        <hr>

          <form action="submitted_data.php" method="post" style="font-size: 20px;padding-left: 50px;padding-right: 50px;">
            
            <div class="row">
              
              <div class="col-md-6" style="padding-left: 1%;padding-right: 1%">
                
                <div style="text-align: left;"><b>Destination *</b></div>
                  <div>
                    <input type="text" placeholder="Destination" name="destination" style="width: 100%;text-align: center;" required>
                  </div>

                </div>


                <div class="col-md-3" style="padding-left: 1%;padding-right: 1%">
                
                  <div style="text-align: left;"><b>Check in date *</b></div>
                    <div>
                      <input type="date" placeholder="check-in-date" name="check-in-date" style="width: 100%;text-align: center;" required>
                    </div>

                  </div>


                <div class="col-md-3" style="padding-left: 1%;padding-right: 0%">
                
                  <div style="text-align: left;"><b>Check out date *</b></div>
                  <div>
                    <input type="date" placeholder="check-out-date" name="check-out-date" style="width: 100%;text-align: center;" required>
                  </div>

                </div>


                <div class="row" style="margin-top: 80px;">
                
                  <div class="col-md-12" style="padding-left: 2%;padding-right: 1%;">
                  
                    <div class="row">
                    
                      <div class="col-md-4">
                        <div style="text-align: left;"><b>Numbers of Rooms</b></div>
                          <div>
                            <input type="number" placeholder="Rooms Needed" name="number-of-rooms" style="width: 100%;text-align: center;" min="0">
                          </div>                      
                        </div>

                      <div class="col-md-4">
                        <div style="text-align: left;"><b>Adults</b></div>
                      <div>
                        <input type="number" placeholder="No. of adults (10+)" name="number-of-adults" style="width: 100%;text-align: center;" min="11" max="150">
                      </div>
                      <div style="text-align: left;font-size: 15px;"><b>(10+ years)</b></div>                      
                      </div>

                      <div class="col-md-4">
                      <div style="text-align: left;"><b>Children</b></div>
                      <div>
                        <input type="number" placeholder="No. of children (10-)" name="number-of-children" style="width: 100%;text-align: center;" min="0" max="10">
                      </div>
                      <div style="text-align: left;font-size: 15px;"><b>(below 10 years)</b></div>                      
                      </div>
                    
                    </div>

                  </div>

                </div>

                <div class="row" style="margin-top: 40px;">
                  
                  <div class="col-md-6" style="padding-left: 2%; padding-right: 1%;">
                    <input name="submit" type="submit" style="padding-left: 0%; padding-right: 0%; width: 100%; height: 60px; font-size: 25px;background-color: #00B0FF;">
                  </div>

                  <div class="col-md-6" style="padding-left: 2%; padding-right: 1%;">
                    <input type="reset" style="padding-left: 0%; padding-right: 0%; width: 100%; height: 60px; font-size: 25px;background-color: #FF7043;">
                  </div>

                </div>


            </div>

          </form>

        </div>

      </div>
      
      <div class="col-md-1">  </div>
  </div>

</div>

<!-- /Room Avabilaty -->



<!-- Team description -->

<div class="row" style="margin-top: 100px;">
  
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
    <div class="row" style="font-size: 40px;text-align: center;color: #3E2723;">
      <b><i> Welcome to AKRRDT </i></b>
    </div>

    <hr>

    <div style="font-size: 20px;text-align: center;">
      
      <p>

        This is a prototype of the website.<br>
        This part will difinitely be changed in the near future.<br>
        Cazzz..

      </p>

    </div>

  </div>
  <div class="col-md-1"></div>

</div>

<!-- /Team description -->




<!-- Services provided -->

<div class="row" style="margin-top: 100px;">
  
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
    <div class="row" style="font-size: 40px;text-align: center;color: #3E2723;">
      <b><i> Services Provided </i></b>
    </div>

    <hr>



    <div class="row" style="margin-top: 20px;">

    <div class="col-md-4" style="background-color: #EEEEEE; text-align: center; padding-left: 15px; padding-right: 15px; padding-top: 20px; padding-bottom: 60px; width: 30%; margin-left: 3%; margin-right: 1%;">
      
      <div>
          
          <div>
            <img src="service_image/image_1.jpg" style="width: 100%;height: 350px;">          
          </div>

          <div style="font-size: 20px;margin-top: 20px;">
            <h3 style="margin-top: 50px;margin-bottom: 30px;"><i> Wedding </i></h3>
            <p><i>
              Wedding are arranged here.<br>
              To book hall click below.
            </i></p>
            <button style="margin-top: 40px;padding-left: 35px;padding-right: 35px;padding-top: 7px; padding-bottom: 7px; font-size: 20px;">
              <a href="#wedding"> <i> Visit </i></a>
            </button>
          </div>

        </div>

    </div>

    



    
    
    <div class="col-md-4" style="background-color: #EEEEEE; text-align: center; padding-left: 15px; padding-right: 15px; padding-top: 20px; padding-bottom: 60px; width: 30%; margin-left: 1%; margin-right: 1%;">
      
      <div>
          
          <div>
            <img src="service_image/image_1.jpg" style="width: 100%;height: 350px;">          
          </div>

          <div style="font-size: 20px;margin-top: 20px;">
            <h3 style="margin-top: 50px;margin-bottom: 30px;"><i> Wedding </i></h3>
            <p><i>
              Wedding are arranged here.<br>
              To book hall click below.
            </i></p>
            <button style="margin-top: 40px;padding-left: 35px;padding-right: 35px;padding-top: 7px; padding-bottom: 7px; font-size: 20px;">
              <a href="#wedding"> <i> Visit </i></a>
            </button>
          </div>

        </div>

    </div>

    



    

    <div class="col-md-4" style="background-color: #EEEEEE; text-align: center; padding-left: 15px; padding-right: 15px; padding-top: 20px; padding-bottom: 60px; width: 30%; margin-left: 1%; margin-right: 1%;">
      
      <div>
          
          <div>
            <img src="service_image/image_1.jpg" style="width: 100%;height: 350px;">          
          </div>

          <div style="font-size: 20px;margin-top: 20px;">
          <h3 style="margin-top: 50px;margin-bottom: 30px;"><i> Wedding </i></h3>
            <p><i>
              Wedding are arranged here.<br>
              To book hall click below.
            </i></p>
            <button style="margin-top: 40px;padding-left: 35px;padding-right: 35px;padding-top: 7px; padding-bottom: 7px; font-size: 20px;">
              <a href="#wedding"> <i> Visit </i></a>
            </button>
          </div>

        </div>

    </div>

    </div>



    </div>

  </div>
  <div class="col-md-1"></div>

</div>

<!-- /Services Provided -->




<!-- Footer -->

<ul class="topnav" style="margin-top: 10%;">

  <li><a hear="#certificate">@Copyright Team-AKRRDT</a></li>
  <li class="right"><a href="#instagram">Instagram</a></li>
  <li class="right"><a href="#facebook">Facebook</a></li>
  <li class="right"><a>Follow us on :</a></li>
  <li class="right"><a href="#contact">Contact Us</a></li>
  <li class="right"><a href="#home">Home</a></li>

</ul>

<!-- /Footer -->

</body>

</html>