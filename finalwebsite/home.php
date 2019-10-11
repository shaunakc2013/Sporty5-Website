<?php
session_start();
echo 'Welcome, '.$_SESSION['username'];
<html>

<head>
        <meta charset="utf-8">
        <title>Sporty5</title>
        <link rel="stylesheet" href="indoor.css">
</head>
   
<body>

<ul>
<li><a href="home.html"> Home </a>

</li>

<li><a> About </a>

</li>

<li><a > Search </a>

</li>

<li><a href="contact.html"> Contact </a>

</li>
    
</ul>

<br>
<br>
<br>




<h1 style="color: yellow"><center> 

	SPORTY5


</center></h1>

   <div class="container">
            
       <div class="box">
                
		<div class="imgBox">
                	<img src="bad1.jpg">
                </div>

		<div class="details">
			<div class="content">
			<h2><a href="indoor.html"> INDOOR SPORTS <h2></a>
			<p>  </p>
			</div>
		</div>
       </div>
            


           <div class="box">
                <div class="imgBox">
                <img src="crick.jpg">
                </div> 
			<div class="details">
			<div class="content">
			<h2><a href="outdoor.html"> OUTDOOR SPORTS </a><h2>
			<p>  </p>
			</div>
		</div>   
            </div>

	<br>

            <div class="box">
                <div class="imgBox">
                <img src="surf.jpg">
                </div>  
		<div class="details">
			<div class="content">
			<h2><a href="water.html"> WATER SPORTS </a> <h2>
			<p>  </p>
			</div>
		</div>
            </div>

            <div class="box">
                <div class="imgBox">
                <img src="athletics.jpg">
                </div>
		<div class="details">
			<div class="content">
			<h2><a href="athlete.html"> ATHELTICS </a> <h2>
			<p>  ljhsgohdo </p>
			</div>
		</div>      
            </div>

        </div>

</body>
</html>
?>