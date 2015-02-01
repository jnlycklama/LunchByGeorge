<!DOCTYPE>
<html>
  <head>
  <?php include('include.php'); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 25%;
      margin-right: auto;
      margin-left: auto;
      margin-top: 50px;

  }

  #myCarousel {
    height: 350px;
  }
  </style>

  </head>
  <body>
   <?php include("header.php"); ?>

   <div class="container">
   <h1>Thanks to the following organizations for their generous support!</h1>

   <br>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src ="CatClubLogo.jpg" alt="" >
    </div>

    <div class="item">
      <img src ="CityOfKingstonLogo.JPG" alt="City OF Kingston" style="width:49.3%;height:65%">
    </div>

    <div class="item">
      <img src ="DavisFoundationLogo.PNG" alt="Davis Foundation"style="width:79.3%;height:65%">
    </div>
    <div class="item">
      <img src ="empirelifeLogo.jpg" alt="Empire Life"style="width:39.3%;height:45%" >
    </div>
    <div class="item">
      <img src ="HomeSteadLogo.jpeg" alt="HomeStead"style="width:49.3%;height:65%" >
    </div>
    <div class="item">
      <img src ="mcrc.jpeg" alt="MCRC" style="width:49.3%;height:85%">
    </div>
    <div class="item">
      <img src ="SoctiaBankLogo.jpg" alt="Soctia Bank"style="width:49.3%;height:65%" >
    </div>
    <div class="item">
      <img src ="StCathedral.PNG" alt="St George Cathedral" style="width:49.3%;height:65%">
    </div>
    <div class="item">
      <img src ="UnitedWayLogo.jpg" alt="" style="width:49.3%;height:65%">
    </div>
    <div class="item">
      <img src ="Capture.PNG" alt="Lilian and Leroy Page Foundation"style="width:49.3%;height:15%" >
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br>


   <h2>We also wish to thank those who contribute food on an ongoing basis:</h2>
   <ul class="list-group">
  <li class="list-group-item">Beethoven Run</li>
  <li class="list-group-item">Canadian Tire Cataraqui</li>
  <li class="list-group-item">Chit Chat Cafe</li>
  <li class="list-group-item">Christ Church Belleville</li>
  <li class="list-group-item">Cora's</li>
  <li class="list-group-item">Food Not Bombs</li>
  <li class="list-group-item">Frontenac Mental Health</li>
  <li class="list-group-item">Holy Cross HS</li>
  <li class="list-group-item">Kingston Curling Club</li>
  <li class="list-group-item">KFC</li>
  <li class="list-group-item">Loving Spoonful</li>
  <li class="list-group-item">Partners in Mission Food Bank</li>
  <li class="list-group-item">Queen's Health Sciences</li>
  <li class="list-group-item">Raging Bull</li>
  <li class="list-group-item">Ruffled Feather</li>
  <li class="list-group-item">St. George's</li>
  <li class="list-group-item">St. Luke's</li>
  <li class="list-group-item">St. Mary's Newburgh</li>
  <li class="list-group-item">St. Peter's</li>
  <li class="list-group-item">St. Thomas</li>
  <li class="list-group-item">The Shriners Club</li>
  <li class="list-group-item">Starbucks</li>
  <li class="list-group-item">Taoist Tai Chi</li>


 </div>
  </body>        
</html>