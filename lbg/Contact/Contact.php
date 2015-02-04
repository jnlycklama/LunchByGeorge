<html>
	<head>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		
		<?php include('../include.php'); ?>

		<style>

		
		body{
			background-color: #ffffff;

		}


		  </style>

		  <style>
		  #gmap_canvas img{
		  	max-width:none!important;background:none!important
		  	}
		  	#map{
		  		margin-top:10;
		  		margin-right: 10;
		  		margin-left: 10;
		  		margin-bottom: 10;

		  	}
		  	#head{

		  		margin-left: 10;
		  	}
		  	#paragraph{

		  		line-height: 160%;
		  		margin-left: 0;



		  	}
		  	#pictures{
		  		display: inline;
		  		margin-top:10;
		  		margin-left: 10;
		  		margin-right: 50%;
		  		margin-bottom: 10;

		  	}

		  </style>

		
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

			<script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(44.22964109999999,-76.48332010000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.22964109999999, -76.48332010000001)});infowindow = new google.maps.InfoWindow({content:"<b>Lunch By George</b><br/>129 Wellington St<br/>K7L 3C9 Kingston, Ontario" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>		
		
	</head>
	<body>
		<?php include("../header.php"); ?>

		<div id ="head">
			<center>
			<font size="10">
			<p style="color: #000000"> Contact:</h1></p>
			</font>
		</center>
		</div>

		<div id = "paragraph">
		<font size="6">

			<center>


			<p style="color: #000000"> Schedule:</h1></p>
			<p style="color: #000000"> Monday to Friday 9:00-11:30am</h1></p>
			<p style="color: #000000"> 9 a.m. and onwards: Coffee and goodies</h1></p>
			<p style="color: #000000"> 10 a.m. Soup</h1></p>
			<p style="color: #000000"> 11 a.m. Hot Nutritious Meal</h1></p>
			<p style="color: #000000"> </h1>_______________________________________</p>

			<p style="color: #000000"> Address:</h1></p>
			<p style="color: #000000"> 129 Wellington Street</h1></p>
			<p style="color: #000000"> P.O. Box 475</h1></p>
			<p style="color: #000000"> Kingston, Ontario, K7L 4W5</h1></p>
			<p style="color: #000000"> </h1>_______________________________________</p>

			<p style="color: #000000"> Contact info:</h1></p>
			<p style="color: #000000"> Telephone: 613 548 4617 ext. 30</h1></p>
			<p style="color: #000000"> Fax: 613 548 7466</h1></p>
			<p style="color: #000000"> Email: info@osgk.org</h1></p>
			<p style="color: #000000"> </h1>  </p>
			<br> </br>

		</center>
		</font>

		<div id= "map">

			<p style="color: #FFFFFF"> </h1>  </p>
			<div id="gmap_canvas" style="height:70%;width:100%;"></div>
			<a class="google-map-code" id="get-map-data"></a></div>

		</div>

	</div>

		

	
		
		


	<!-- Comment -->
	</body>