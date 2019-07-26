<?php

class HEADER
{

//11072017 JG : hierin staat de head met alles toebehorend. zodra je hier wat aanpast staat alles op de pagina
    /**
     * Geeft de head zodat die in een pagina gestopt kan worden
     * @param string $titel
     */
    public static function head($titel = "test")
    {
        echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="images/favicon3.ico">

    <title>' . $titel . '</title>

    <!-- CSS -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/bevestigBoxen.css">
	
	<link rel="stylesheet" type="text/css" href="css/datatables.css"/>
	<link rel="stylesheet" type="text/css" href="javascript/numpadDep/jquery.numpad.css"/>
	<link href="fa/css/all.css" rel="stylesheet">

    
  </head><body>';
    }

//11072017 JG : hierin staat de bottom met alles toebehorend vaak staat hier een footer en/of javascript verwijzingen. zodra je hier wat aanpast staat het op alle pagina's
    public static function bottom()
    {


        echo '
	<footer>
		<p>©2017-' . date("Y") . ' Brugman Radiatorenfabriek BV. All rights reserved.</p>
	</footer>
	
	<script src="javascript/jquery.js"></script>
    <script src="boot/js/bootstrap.js"></script>
    <script src="javascript/rechten.js"></script>
    <script src="javascript/wachtRij.js"></script>	
	<script src="javascript/verschuifPrioriteiten.js"></script> 
	<script type="text/javascript" src="javascript/tablejson/lib/jquery.tabletojson.js"></script>
    <script type="text/javascript" src="javascript/datatables.js"></script>
    <script src="javascript/bevestigBoxen.js"></script>
    <script src="javascript/algemeen.js"></script>
    <Script src="javascript/numpadDep/jquery.numpad.js"></Script>
    <Script src="javascript/scroll.js"></Script>
    <Script src="javascript/leiding.js"></Script>
    <Script src="javascript/index.js"></Script>
    <script>
    
	function RefreshCache(){
    var hours = new Date().getHours();

		if (hours >0 && hours < 2)  {
			window.location.reload(true);
		}
	
	}

setInterval(RefreshCache, 3600000); // one hour check.
    </script>
	</body>
	</html>';
    }
}