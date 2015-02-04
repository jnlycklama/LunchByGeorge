<!DOCTYPE>
<html>
  <head>
  <script>
  $("input.download").click(function() { $("iframeID").attr("src", $(this).attr("href")); });
  </script>
  <?php include('../include.php'); ?>

  <style>

  h1{
    font-size: 4em;
  }

  </style>
  </head>
  <body>
  <?php include("../header.php"); ?>
    <div class="container">
    <div class="row">
      <div class="col-sm-6">
  <h2>Support</h2><h1> Lunch By George</h1>
  <p>You will receive an immediate tax receipt via email and we will receive 100% of your donation (minus credit card fees).</p>
</div>
<div class="col-sm-6">

  <P>Outreach St. George's Kingston (OSGK) is a registered charity (#872941497RR0001). It is now easier than 
    ever to give to Lunch By George through online donations to OSGK.We are registered with Canadahelps.org, 
    a non-profit, secure online donation site that serves many Canadian charities. Just click below and you 
    will go directly to the page where you can donate to Outreach St. George's Kingston, which sponsors Lunch By George.</p>
<br>
<a href="https://www.canadahelps.org/dn/9609"><img src="Logo_CanadaHelps.jpg" style = "width:180px;height:120px"></a> 
</div>
</div>

<div class="row">
  <div class="col-sm-6">
    <img src="Client.JPG" alt = "Clients Picture" style = "width:500px;height:400px">
  </div>
  <div class="col-sm-6">
    <img src="Volunteer.JPG" alt = "Volunteering Picture"style = "width:500px;height:400px">
  </div>
</div>

<br>
<br>
<br>

<div class="row">
  <div class="col-sm-6">
    <p>You can also print the form on the right and mail it to us with a cheque addressed to Lunch By George. 
      Since OSGK is a registered charity, all donations are tax deductible. Simply mail us your cheque at the address below. 
      Be sure to include your return address so that we can mail you a charitable receipt.</p>
      <a href="download.php">
      <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span></button>
      </a>

      <p>Send your support to:<br>

      <b>Lunch By George/OSGK

      P.O. Box 475, Kingston, Ontario K7L 4W5</b>
      </p>
  </div>
  <div class="col-sm-6">
    <img src="donation.jpg" alt = "Donation form" style = "width:299px;height:400px">
      
  </div>
</div>
</div>
  </body>        
</html>