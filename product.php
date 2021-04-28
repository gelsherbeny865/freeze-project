<?php
require_once("dashboard/lib/productus.php");
$data =$obj1->selectproducts();
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="front/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="front/css/mobile.css">
	<script src="front/js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="home.php" class="logo"><img src="front/images/logo.png" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li class="menu">
						<a href="about.php">About</a>
						<ul id="selected" class="primary">
							<li class="">
								<a href="product.php">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="blog.php">Blog</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.php">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Products</h1>
				</div>
			</div>
			<?php  foreach($data as $d): ?>
			<div>
				<ul>
					<li>
						<h1>All Time Classic</h1>
						<p><?= $d['description']?></p>
					</li>
					<?php for($i=0; $i<3 ; $i++): ?>
					<li>
						<img src="dashboard/upload/<?= $d['img'];?> " width="100px" height="100px"  alt="">
						<h2><?= $d['title'];?></h2>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
			<?php  endforeach; ?>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
