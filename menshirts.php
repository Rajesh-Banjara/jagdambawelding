<?php
      session_start();
      if(!isset($_SESSION['login']) && empty($_SESSION['login'])){
      header("Location: http://localhost/online/login.php");
        }
?>


<html>
	<head><title>Men Shirts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="C:\ibirds\esimakin-twbs-pagination-9b6d211/jquery.twbsPagination.min"></script>	
		<script>
		 $('.sync-pagination').twbsPagination({
        totalPages: 20,
        onPageClick: function (evt, page) {
            $('#content').text('Page ' + page);
        }
    });
	</script>
	<style text="text\css">
		.imagesize{
			width:70%;
			height:50%;
		}
	</style>
	</head>
	<body>
	<div class="inner-wrap">
           
				
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Aryan Cloth</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">men
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menshirts.html">Shirts</a></li>
          <li><a href="menjeans.html">Jeans</a></li>
          <li><a href="mentouser.html">Touser</a></li>
        </ul>
      </li>
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Woman
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="girltop.html">Top wear</a></li>
          <li><a href="girlwest.html">Western wear</a></li>
          <li><a href="girlkurta.html">Kurta</a></li>
        </ul>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kids
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="kidsshirts.html">Shirts</a></li>
          <li><a href="kidsjeans.html">Jeans</a></li>
          <li><a href="kidssuits.html">Baby Suits</a></li>
        </ul>
      
      <li><a href="toys.html">Toys</a></li>
         
		</ul>
  </div>
</nav>

	<div class="row">
		<div class="col-md-3">
			<a href="shirtsdetails.html"><img src="images\shirts\shirts1.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200"></a>
		</div>
		<div class="col-md-3">
			<img src="images\shirts\shirts2.jpg" id="img" class="img-responsive  img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200">
		</div>
		<div class="col-md-3">
			<img src="images\shirts\shirts3.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200">
		</div>
		<div class="col-md-3">
			<img src="images\shirts\shirts4.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200">
		</div>
	</div>
	<div class="row">
  <div class="col-md-3"><img src="images\shirts\shirts5.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200"></div>
  <div class="col-md-3"><img src="images\shirts\shirts6.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200"></div>
  <div class="col-md-3"><img src="images\shirts\shirts7.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200"></div>
  <div class="col-md-3"><img src="images\shirts\shirts8.jpg" id="img" class="img-responsive img-thumbnail imagesize" alt="Cinque Terre" width="200" height="200"></div>
	</div>
	
	</body>
</html