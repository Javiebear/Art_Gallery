<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
 
	 <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="main_style.css">
	<title>Frigus Art Gallery</title>
</head>
<body>

	<div id="header">
		<h1 id="website-name">Frigus Art Gallery</h1>

	</div>

	<header>
		<nav>
			<table id="boxTrial">
				<tr>
            		<td><img src="logo.png" width="176px" height="66px"></img></td>
					<td><a href="main.php"><h2>Home</h2></a></td>
					<td><a href="main.php#genres"><h2>Artworks</h2></a></td>
					<td><a href="artGallery.php"><h2>Booking</h2></a></td>
					<td><a href="about_us.html"><h2>About Us</h2></a></td>
				</tr>
			</table>
		</nav>
	</header>

	<div id="body">
		<div class="moving-display">
			<img id="moving-display-image" src="" alt="" width="500" height="500"></img>
			<br>
			<table>
				<tr>
					<td><h2 id="moving-display-button-left"><</h2></td>
					<td><h2 id="moving-display-button-right">></h2></td>
				</tr>
			</table>
			<h2 id="moving-display-name">Placeholder</h2>
			<h4 id="moving-display-description">Placeholder</h4>
		</div>

		<div id="genres" style="background-image: url('back.jpg');">
			<div class = "container"> 
				<div class = "jumbotron text-center">
				  <h1>Genres</h1>
				  <p id="maintext">Browse through a wide range of genres - from fantasy art to photography!</p>    
				</div>
				<div class="row">
					<div class = "col-sm-4">
					 <a href = "fantasy.html">
						<img src = "images\Fantasy\Slaves to Darkness by Johan Grenier.jpg" alt ="fantasy" class= "img-thumbnail" style="width:500px;height:300px;">
					 </a>
					   <h3>Fantasy Art</h3>
					   <a href="fantasy.html" class="btn btn-danger">View Collection</a> 
					   
					 
					</div>


				<div class = "col-sm-4">
					 <a href = "abstract.html">
						<img src = "images\Abstract\convergence by jackson pollock.jpg" alt = "abstract" class= "img-thumbnail" style="width:500px;height:300px;">
					  </a>
					   <h3>Abstract Art</h3>
					   <p style="font-style: italic; font-size: x-small;">
						</p>
					   <a href="abstract.html" class="btn btn-danger">View Collection</a>
				</div>


				<div class = "col-sm-4">
					<a href = "pop.html">
						<img src = "images\Pop\dexter-and-walter-giuseppe-cristiano.jpg" alt = "pop" class= "img-thumbnail" style="width:500px;height:300px;">
					</a>
					<h3>Pop Art</h3>
					<p style="font-style: italic; font-size: x-small;">
					</p>
					<a href="pop.html" class="btn btn-danger">View Collection</a>
				</div>
			</div>


			<div class="row">
			  <div class = "col-sm-4">
				<a href = "landscape.html">
					<img src = "images\Landscape\beauty-after-dark-kadek-susanto.jpg" alt = "landscape" class= "img-thumbnail" style="width:500px;height:300px;">
				</a>
				<h3>Landscape Art</h3>
				<p style="font-style: italic; font-size: x-small;">
				</p>
				<a href="landscape.html" class="btn btn-danger">View Collection</a>
			</div>

		  <div class = "col-sm-4">
			<a href = "Eerie.html">
				<img src = "eerie.jpg" alt = "eerie" class= "img-thumbnail" style="width:500px;height:300px;">
			</a>
			<h3>Eerie Art</h3>
			<p style="font-style: italic; font-size: x-small;">
			</p>
			<a href="eerie.html" class="btn btn-danger">View Collection</a>
			</div>

			<div class = "col-sm-4">
				<a href = "framed-prints.html">
					<img src = "images\Framed Prints\a-model-with-a-cheetah-leombruno-bodi.jpg" alt = "framed-prints" class= "img-thumbnail" style="width:500px;height:300px;">
				</a>
				<h3>Framed Prints</h3>
				<div style = "right: auto;"> <a href="framed-prints.html" class="btn btn-danger">View Collection</a> </div>
			</div>
			</div>
		</div>
	</div>

	<div id="footer">
	</div>

	<script type="text/javascript" src="system.js"></script>
</body>
</html>