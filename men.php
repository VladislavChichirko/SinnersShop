<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Men's Cloth</title>
	
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.15.1/slimselect.min.css'>
	<link rel="stylesheet" href="css/men.css">
	<link rel="icon" type="image/x-icon" href="images/icons/hell.ico">
	<link rel="stylesheet" href="css/header.css">

	
	
	<script src="js/dropsdown.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
	<link rel="stylesheet" href="css/dropdown.css">
</head>

<body>

	<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
		<?php
			require_once "php/functions.php";
			connectDB();
			$cloth = getCloth(4,$id);
		?>
	</head>

	<body>
	

		<header class="header">
			<div class="container">
				<div class="header__inner">
					<div class="header__logo"><img src="images/logo.svg" ></div>
						<nav class="nav">
							<a class="nav__links" href="index.php">Main</a>
							<a class="nav__links" href="collection.html">COLLECTION</a>
							<a class="nav__links" href="#">MEN</a>
							<a class="nav__links" href="women.php">WOMEN</a>
							<div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">USER
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                          <a href="signup.php">Reg In     <i class="fas fa-sign-in-alt"></i></a>
                          <a href="login.php">Log IN     <i class="far fa-user"></i></a>
                          <a href="logout.php">EXIT       <i class="fas fa-times"></i></a>
                        </div>
                   
                    </div>
			
						</nav>
				</div>
			</div>
		</header>

		<div class="wrapper">
			<div class="container">
				<div class="gallery-filters">
					<h3 class="gallery-filters__title">Filters</h3>
					<label class="gallery-filters__filter" for="category-filter">
						<span>
							Category
						</span>
						<select name="category-filter" id="category-filter">
							<option value="all">All</option>
							<option value="T-shirt">T-shirt</option>
							<option value="Hoodie">Hoodie</option>
						</select>
					</label>
					<label class="gallery-filters__filter" for="type-filter">
						<span>
							Type
						</span>
						<select name="type-filter" id="type-filter">
							<option value="All">All</option>
							<option value="Popular">Most Popular</option>
							<option value="Expensive">Expensive</option>
						</select>
					</label>
				</div>
					
				<div class="image-gallery grid" id="gallery-grid">
					<?php
						for ($i=0; $i < count($cloth); $i++) { 
							echo '	
							<div class="image-gallery__item" data-category="'.$cloth[$i]["Type"].'" data-type="'.$cloth[$i]["Atribute"].'">
								<div class="muuri-safe">
								<figure role="group" class="image-gallery__item-image">
									<img src="products/'.$cloth[$i]["Pic"].'.png" alt="Unsplash Image">
									<div class="image-gallery__item-tag image-gallery__item-tag--nature">
										<span>
											'.$cloth[$i]["Type"].'
										</span>
									</div>
								</figure>
									<div class="image-gallery__item-wrap">
										<h3 class="image-gallery__item-title">
											'.$cloth[$i]["Title"].'
										</h3>
										<p class="image-gallery__item-caption" >
											'.$cloth[$i]["About"].'
										</p>
									</div>
									
									<a href="cloth.php?id='.$cloth[$i]["ID"].'" class="image-gallery__item-link">
										Buy for '.$cloth[$i]["Price"].'.00$
									</a>
								</div>
							</div> 
							';
						}
					?>
				</div><!-- /image-gallery -->
			</div><!-- /container -->
		</div><!-- / wrapper -->
	</body>
	</html><!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/muuri/0.5.4/muuri.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.15.1/slimselect.min.js'></script><script  src="js/men.js"></script>
	
	<?php require "footer.html" ?>
</body>
</html>
