<!DOCTYPE html>
<html> 
<head>
  <title>HNG 4.0 Stage1_Eleojo</title>
  <script>
	function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      m = checkTime(m);
      document.getElementById('txt').innerHTML =
      h + ":" + m;
      var t = setTimeout(startTime, 500);
	}
	  function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
	}
</script>
  <style>
    .screen {
	  position: absolute;
	  left: 720px;
	  top: 40px;
	}
	
	.button2 {
    background-color: #14ACF2;
    border: none;
    color: white;
    padding: 16px;
	border-radius: 60px;
    text-align: center;
    position: absolute;
	left: 124px;
	top: 745px;
	font-family: Roboto; font-size: 24px; font-weight: regular;
	width: 232px;
	cursor: pointer;
	}
	
	.logo {
	position: absolute;
	left: 124px;
	top: 52px;
	font-family: Roboto; font-size: 30px; color: #14ACF2; font-weight: bold;
	}
	
	.header-text {
	position: absolute;
	left: 45px;
	top: 132px;
	font-family: Roboto; font-size: 42px; color: #FFFFFF; font-weight: 300;
	}
	
	.regular-text {
	position: absolute;
	left: 110px;
	top: 187px;
	font-family: Roboto; font-size: 30px; color: #A3A3A3; font-weight: 300;
	}
	
	#txt {
	position: absolute;
	left: 160px;
	top: 444px;
	font-family: Roboto; font-size: 78px; color: #FFFFFF; font-weight: 300;
	}
	
	.line {
	position: absolute;
	left: 205px;
	top: 92px;
	width: 50px; noshade;
	color: #A2ADB2;
	}
  </style>
</head>
<body onload="startTime()">
	<div class="screen">
	<div id="txt"></div>
    <div class="line"><hr></div>
    <img src="./background.png" alt="HNG 4.0 watch">
	<button class="button2">Start Now</button>
    <div class="logo">HNG Internship 4</div>
	<div class="header-text">Earn while you Learn.</div>
	<div class="regular-text">It's finally your time.</div>
  </div>
  
</body>
</html>