<!DOCTYPE html>
<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title> Comurule Project </title>
   
   <meta name="viewport"
         content= "width=device-width,initial-scale=1";>

   

   <style type="text/css">
   	*{
   	   box-sizing: border-box;   	}

   	   /*style of body*/
   	   body {
   	   	background-color: #D52EF0;
   	   	border: 10px, block, black;
   	   	color: white;
   	   	
   	   }

   	   /*timer style*/
   	   #time{
   	   	width:100%;
   	   	margin: 0 auto;

   	   }

   	   /*style of image*/
   	   .img {
             width: 70%;
             height: 100%;
             float: left;
             padding: 0px;
             margin: 0px;
   	   }

   	   /*style of sidebar*/
   	   .side {
   	   	width: 30%;
   	   	float: right;
   	   	color: white;
   	   	text-align: center;
   	   	padding: 20px;

   	   }

   </style>
         
  </head>

  <body>
    <div class="side" style="background-color:none; height: 100%; padding: 1vw;" >
    	<div style="color:white; text-align: center;" >
    		<h1> HNG <span style="font-size: 80%;">Internship</span> 4</h1>
    	</div>

    	<div style="height: 60%; text-align: center; margin-bottom: 25%; margin-top:25%">
    		<h2 id="time" style="font-size: 200%;text-align: center;"> 
    		<?php
    		 echo date("h:ia") 

    		 ?>
    		    		</h2>
    		<h4 style="text-align: center;">
    		 <?php
    		 echo date("d-m-Y")

    		 ?>
    		 	
    		 </h4> 
    	</div>

    	<div>
    		<h1>Comurule Designs</h1>
    	</div>


    </div>

    <div class="img">
    	<img src= "IMAG0188.jpg"    
    	alt="\IMAG0188.jpg" 
    	style="width: 100%; height: 40vw;"

    	>

    	
    </div>
  </body>
</html>