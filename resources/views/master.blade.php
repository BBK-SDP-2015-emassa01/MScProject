<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<title>Jellibeans</title>

<link href="css/leapstrap.css" rel="stylesheet" media="screen">
<link rel= "stylesheet" href = "css/style.css">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/leapstrap.js"></script>
<script src="js/jellibeans.js"></script>
<script src="//js.leapmotion.com/0.3.0-beta3/leap.js"></script>

<style type="text/css" media="screen">
    .divCenMid{font-family:'Lato',sans-serif;font-size:14pt;font-style:normal;font-weight:500;text-align:center;vertical-align:middle;margin:0;}
    .allbdrCenMid{border:.75pt solid windowtext;color:#000;font-family:'Lato',sans-serif;font-size:10pt;font-style:normal;font-weight:400;text-align:center;vertical-align:middle;margin:0;}
    .allbdrCenTop{border:.75pt solid windowtext;color:#000;font-family:'Lato',sans-serif;font-size:10pt;font-style:normal;font-weight:400;text-align:center;vertical-align:top;margin:0;}
    .allbdrLtMid{border:.75pt solid windowtext;color:#000;font-family:'Lato',sans-serif;font-size:10pt;font-style:normal;font-weight:400;text-align:left;vertical-align:middle;margin:0;}
    .allbdrLtTop{border:.75pt solid windowtext;color:#000;font-family:'Lato',sans-serif;font-size:10pt;font-style:normal;font-weight:400;text-align:left;vertical-align:top;margin:0;}
</style>

@yield('head')
</head>
<body>
	<div class="container">
		@include('partials.nav')
	</div>
	<div class="container">	
		@yield('content')
	</div>
</body>
</html>