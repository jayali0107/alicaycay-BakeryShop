<!DOCTYPE html>
<html>
<head>
    <title>E-commerce</title>
     <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/lightbox.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
        <!---
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        --->
</head>

<body>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					E-Commerce
				</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="Product.php">Product</a></li>
					<li><a href="music.php">Music</a></li>
					<li><a href="Contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>		
	</nav>

<aside class="col-md-4">
	<div class="col-md-10 col-md-offset-1">
	<div class="list-group">
		<a href="music.php" class="list-group-item" style="padding: 0; margin:0;">
			
		<div class="col-md-3" style="padding: 0; margin:0; ">
			<img src="pic/b1.jpg" style="width:80px; height:100px;">
		</div>	
		<div class="col-md-9">
			<div class="list-group-item-heading">
				<h4>Drum set</h4>
				<h4>PHP: 200,000,000,000</h4>
				<div class="clearfix"></div>
			</div>
			<p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
		</div>
		<div class="clearfix"></div>
		</a>
	</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
	<div class="list-group">
		<a href="music.php" class="list-group-item" style="padding: 0; margin:0;">
			
		<div class="col-md-3" style="padding: 0; margin:0; ">
			<img src="pic/b2.png" style="width:80px; height:100px;">
		</div>	
		<div class="col-md-9">
			<div class="list-group-item-heading">
				<h4>Drum set</h4>
				<h4>PHP: 200,000,000,000</h4>
				<div class="clearfix"></div>
			</div>
			<p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
		</div>
		<div class="clearfix"></div>
		</a>
	</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
	<div class="list-group">
		<a href="Product.php" class="list-group-item" style="padding: 0; margin:0;">
			
		<div class="col-md-3" style="padding: 0; margin:0; ">
			<img src="pic/pic5.jpg" style="width:80px; height:100px;">
		</div>	
		<div class="col-md-9">
			<div class="list-group-item-heading">
				<h4>Vehivle</h4>
				<h4>PHP: 200,000,000,000</h4>
				<div class="clearfix"></div>
			</div>
			<p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
		</div>
		<div class="clearfix"></div>
		</a>
	</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
	<div class="list-group">
		<a href="Product.php" class="list-group-item" style="padding: 0; margin:0;">
			
		<div class="col-md-3" style="padding: 0; margin:0; ">
			<img src="pic/pic5.jpg" style="width:80px; height:100px;">
		</div>	
		<div class="col-md-9">
			<div class="list-group-item-heading">
				<h4>vehicle</h4>
				<h4>PHP: 200,000,000,000</h4>
				<div class="clearfix"></div>
			</div>
			<p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
		</div>
		<div class="clearfix"></div>
		</a>
	</div>
	</div>


</aside>


<header class="col-md-8">
	<div class="col-md-12">
	<div class="thumbnail">
		
		<img src="pic/b2.png" style="width: 100%;">
		<div class="caption">
		<h4 class="pull-right">Drum Set</h4>
		<h5><a href="Product.php">PHP: 200,000,000</a></h5>
		<div><button class="btn btn-primary" data-target="#buyme" data-toggle="modal" style="margin-left: 10px; margin-bottom: 10px;">buy this Drum set</button></div>
		<div class="modal fade" id="buyme">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title">Buy Drum set</h2>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Enter Your Name">
							</div>	

							<div class="form-group">
								<input type="email" class="form-control input-lg" placeholder="Enter Your Email">
							</div>	

							<div class="form-group">
								<input type="contact" class="form-control input-lg" placeholder="Enter Your Contact Number">
							</div>	

							<div class="form-group">
								<textarea class="form-control" rows="5" style="font-size: 20px; color: gray;">Address...</textarea>
							</div>			
						</form>
					</div>

					<div class="modal-footer">
						<button class="btn btn-danger" data-dismiss="modal">Submit</button>

					</div>
				</div>
			</div>
		</div>

		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

		</p>
		</div>
	</div>
</div>
</header>

<div class="col-md-8 col-md-offset-4">
	<div class="col-md-12">
		<div class="well">
		<div class="text-right">
			<button class="btn btn-danger">Comments</button>
		</div>
		</div>

		<div class="well">
		<span class="lead"> Mr. Navy</span>
		<span class="pull-right">1 day ago</span>
		<p>I love this Drum set</p>
		</div>

		<div class="well">
		<span class="lead"> Mr. Navy</span>
		<span class="pull-right">2 day ago</span>
		<p>I love this Drum set</p>
		</div>

		<div class="well">
		<span class="lead"> Mr. Navy</span>
		<span class="pull-right">3 day ago</span>
		<p>I love this Drum set</p>
		</div>

		<div class="well">
		<span class="lead"> Mr. Navy</span>
		<span class="pull-right">4 day ago</span>
		<p>I love this Drum set</p>
		</div>
	</div>
</div>



<div class="container">
	<div class="page-header"><h3 class="text-center">Related Products</h3></div>
<div class="col-md-3">
	<div class="thumbnail">
		 <a href="pic/b1.jpg" data-lightbox="gallery" data-title="Drum set" class="thumbnail"><img src="pic/b1.jpg" style="width: 100%;"></a>
		<div class="caption">
		<h4 class="pull-right">Drum set</h4>
		<h5><a href="Product.php">PHP: 200,000,000</a></h5>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		</div>
	</div>

</div>

<div class="col-md-3">
	<div class="thumbnail">
		
		<a href="pic/b3.jpg" data-lightbox="gallery" data-title="Drum set 2" class="thumbnail"><img src="pic/b3.jpg" style="width: 100%;"></a>
		<div class="caption">
		<h4 class="pull-right">Drum set</h4>
		<h5><a href="Product.php">PHP: 200,000,000</a></h5>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

		</p>
		</div>
	</div>
	
</div>

<div class="col-md-3">
	<div class="thumbnail">
		
		<a href="pic/b1.jpg" data-lightbox="gallery" data-title="Drum set 3" class="thumbnail"><img src="pic/b1.jpg" style="width: 100%;"></a>
		<div class="caption">
		<h4 class="pull-right">Drum set</h4>
		<h5><a href="Product.php">PHP: 200,000,000</a></h5>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

		</p>
		</div>
	</div>
	
</div>

<div class="col-md-3">
	<div class="thumbnail">
		
			<a href="pic/b3.jpg" data-lightbox="gallery" data-title="Drum set 4" class="thumbnail"><img src="pic/b3.jpg" style="width: 100%;"></a>
		<div class="caption">
		<h4 class="pull-right">Drum set</h4>
		<h5><a href="Product.php">PHP: 200,000,000</a></h5>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

		</p>
		</div>
	</div>
	
</div>
</div>




</body>
</html>