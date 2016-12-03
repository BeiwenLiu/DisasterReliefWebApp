<!doctype html>
<?php
	include('include/retrieve.php');
	$array = select();

    $array = json_encode($array);
?>

<html>
    <head>
        

        <link rel="stylesheet" type="text/css" href="style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.5/leaflet.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.5/leaflet.js"></script>
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.s/mq-map.js?key=ZPFjVkRkJKY3tPYvZrT2khLRLvAg9v1H"></script>
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.s/mq-geocoding.js?key=ZPFjVkRkJKY3tPYvZrT2khLRLvAg9v1H"></script>

        <script type="text/javascript">
            window.onload = function() {

                var map = L.map('map', {
                    layers: MQ.mapLayer()
                });

                console.log(<?php echo $array ?>);

                array = <?php echo $array ?>;

                for (i = 0; i<array.length; i++) {
                    MQ.geocode({
                    map: map,
                    icon: L.icon({
                        iconUrl: 'http://www.mapquestapi.com/staticmap/geticon?uri=mcenter.png',
                        iconSize: [ 22, 28 ],
                        iconAnchor: [ 11, 28 ],
                        popupAnchor: [ 0, -22 ]
                    })
                    }).search(array[i]);
                }

                
            }

        </script>
    </head>

    <body style='border:0; margin: 0' background="bg.png">
    	<div id='title'>
    		<ul class='tab'>
	    		<li><a href="#">Home</a></li>
	    		<li><a href="s2.php">Volunteer</a></li>
	    		<li><a href="s1.php">Request Help</a></li>
    		</ul>
    	</div>
        <div id='map' class='map' style='width:1000px; height:700px;'></div>
        <div id='box_left'>
        	<div id="box1" style="align:center;"><img src="photo1.jpg" id='p1'></div>
        	<div class="spacer"></div>
        	<div id="box2"><h2 style="text-align: center; color:white;">Welcome to the Red Cross Disaster Relief Router! <br> This web application displays areas where help <br> is needed in your community. Please volunteer to help <br> out or request help in the tabs.</h2></div>
        </div>
    </body>
</html>