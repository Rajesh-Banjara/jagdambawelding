﻿<?php 
echo "hello";
?>
<htmml>
<head>
	<title>Welcome to the Aryan cloth store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="custom.css" rel="stylesheet">
	<style>
		 .carousel-inner > .item > img,
		 .carousel-inner > .item > a > img {
			 display: block;
			 max-width: 100%;
			 height: 80%;
		 }
			 
			.navbar-brand>img{
			height: 100%;
			padding: 15px;
			width: auto;
			}
			
			@media screen and (max-width: 1024px) and (min-width: 640px) {
		    .btnsearch{
		        float: left;

		    }
}
	
	</style>
	<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("imgmen").src = images[x];
			   y = (y === images.length - 1) ? 0 : y + 1;
			  document.getElementById("imgwoman").src = image[y];
			   z = (z === images.length - 1) ? 0 : z + 1;
			  document.getElementById("imgkids").src = imagekids[z];
			   a = (a === images.length - 1) ? 0 : a + 1;
			  document.getElementById("imgtoys").src = toys[a];
				}
			function startTimer() {
              setInterval(displayNextImage, 3000);
				}
			  var images = [], x = -1;
			  var image = [],y=-1;
			  var imagekids=[],z=-1;
			  var toys=[],a=-1;
			  images[0] = "images\\interval\\image1.jpg";
			  images[1] = "images\\interval\\image2.jpg";
			  images[2] = "images\\interval\\image3.jpg";
			  image[0] = "images\\interval\\image5.jpg";
			  image[1] = "images\\interval\\image6.jpg";
			  image[2] = "images\\interval\\image7.jpg";
			  imagekids[0]="images\\interval\\image8.jpg";
			  imagekids[1]="images\\interval\\image9.jpg";
			  imagekids[2]="images\\interval\\image10.jpg";
			  toys[0]="images\\interval\\image11.jpg";
			  toys[1]="images\\interval\\image12.jpg";
			  toys[2]="images\\interval\\image13.jpg";
		  
     </script>
	 
</head>
	<body  onload = "startTimer()">
	<div class="inner-wrap">
        <nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html"><img src="images\logo\logo.png" id="logo" class="img-responsive" alt="Cinque Terre"/></a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.html"><span class="glyphicon glyphicon-Home"></span>Home</a>
					</li>
				    <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">men<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="menshirts.html">Shirts</a></li>
						  <li><a href="menjeans.html">Jeans</a></li>
						  <li><a href="mentouser.html">Touser</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Woman<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="girltop.html">Top wear</a></li>
						  <li><a href="girlwest.html">Western wear</a></li>
						  <li><a href="girlkurta.html">Kurta</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Kids<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="kidsshirts.html">Shirts</a></li>
						  <li><a href="kidsjeans.html">Jeans</a></li>
						  <li><a href="kidssuits.html">Baby Suits</a></li>
						</ul>
					</li>
					<li><a href="toys.html">Toys</a></li>
					<li><a href="aboutus.html">Aboutus</a></li>							 
					<li>
						<form class="navbar-form">
							<div class="input-group">
								<input type="text" class="form-control navbar-right" placeholder="search" name="search" style="width:inherit;height:28px;">
								<div class="input-group-btn">
									<button class="btn btn-default btnsearch" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>    
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#myModallogin" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>

		<div class="col-md-12 clearfix">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/image1.jpg" alt="shopping end" class="img-responsive">
					</div>

					<div class="item">
					  <img src="images/image2.jpg" alt="shopping end" class="img-responsive">
					</div>

					<div class="item">
					  <img src="images/image3.jpg" alt="shopping end" class="img-responsive">
					</div>

					<div class="item">
					  <img src="images/image4.jpg" alt="shopping end" class="img-responsive">
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
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-lg-3" style="margin-left:0px;"><label id="sale" style="margin-top:30px;"><b>Men<sup>'</sup>s Deals:</b></label>
				<img src="images\interval\startimage.jpg" id="imgmen" class="img-responsive" alt="Cinque Terre" width="200" height="200"/>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3"><label id="salemenitem" style="margin-top:30px;"><b>woman<sup>'</sup>s Deals:</b></label>
				<img src="images\interval\startwomanimage.jpg" id="imgwoman" class="img-responsive" alt="Cinque Terre" width="200" height="200"/>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3"><label id="salewomanitem" style="margin-top:30px;"><b>Kids<sup>'</sup>s Deals:</b></label>
				<img src="images\interval\startkidsimage.jpg" id="imgkids" class="img-responsive" alt="Cinque Terre" width="200" height="200"/>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3"><label id="salekidsitem" style="margin-top:30px;"><b>Toys<sup>'</sup>s Deals:</b></label>
				<img src="images\interval\starttoyimage.jpg" id="imgtoys" class="img-responsive" alt="Cinque Terre" width="200" height="200"/>
			</div>
		</div>
		
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6 col-lg-offset-2 col-md-offset-2">
                    <h3>Home </h3>
                    <ul>
                        <li> <a href="#">Men </a> </li>
                        <li> <a href="#">Woman</a> </li>
                        <li> <a href="#">Kids</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Blog </h3>
                    <ul>
                        <li> <a href="#">Twitter</a> </li>
                        <li> <a href="#">Linked In</a> </li>
                        <li> <a href="#">Google+</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Contact us</h3>
                    <ul>
                        <li> <a href="#">Email</a> </li>
                        <li> <a href="#">Facebook</a> </li>
                        <li> <a href="#">+910211142</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3>Follow Us </h3>
                    <ul class="social">
                        <li> <a href="#"> <i class="glyphicon glyphicon-phone-alt">   </i> </a> </li>
                       
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <center><p> Copyright ©  All right reserved. </p></center>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
		
		        
		
		


		<div id="myModallogin" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Register with us</h4>
				  </div>
				  <div class="modal-body">
				   <form>
					<div class="form-group">
					<label for="usr">Name:</label>
					<input type="text" class="form-control" id="uname" placeholder="Enter Name">
					</div>
					<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="umail" placeholder="Enter Email">
					</div>
					<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="upassword" placeholder="Enter Password">
					</div>
					<div class="form-group">
					<label for="conformpass">Confirm Password:</label>
					<input type="password" class="form-control" id="uconfpassword" placeholder="Confirm Password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn-primary" value="Register" style="width:100%; height:10%;"/>
					</div>
				</form>

				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login</h4>
				  </div>
				  <div class="modal-body">
				   <form class="form" action="login.php" method="post">
					<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="loginemail" placeholder="Enter Email">
					</div>
					<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="loginpassword" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn-primary" value="Login" style="width:100%; height:10%;"/>
					</div>
				</form>

				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
				</div>
			</div>
			
				
				
	</body>
</html>