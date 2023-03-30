<html>
<head>
	<title>E-handel</title>

	<link rel="stylesheet" href="main.css">
	<meta charset="UTF-8">
</head>

<body>
<nav>
	<ul>
		<li>
			<a href="index.php">Hem</a>
		</li>
		<li>
			<a href="produkter.php">Produkter</a>
		</li>
		<li>
			<a href="kategorier.php">Kategorier</a>
		</li>
		<li>
			<a href="kundvagn.php">Kundvagn</a>
		</li>
	</ul>
</nav>

<main>
	<div class="search-container">
		<div>
			<input type="text" class="input-field" placeholder="Sök efter produkter...">
			<button class="input-button" style="height: 100%;">Sök</button>
		</div>
	</div>

	<h2 class="flex centered">Utvalda produkter</h2>
	<div class="featured">
		<?php 
		/*använder filen produkterModel för att använda funktionen getProdukter som hämtar produkterna*/
		require 'model/produkterModel.php';

		$produktModel = new produkterModel();
		$produkter = $produktModel->getProdukter();


		$utvaldaCounter = 0;

		foreach ($produkter as $produkter)
		 {
			if ($utvaldaCounter == 4) {
				break;
			}

			$utvaldaCounter ++;
			 ?>


			<div class="product-card">
				<img src="bilder/<?php echo $produkter['img'];?>">
				<h2><?php echo $produkter['name'] ?></h2>
				<p> <?php echo $produkter['description'] ?></p>
				<a href="produkt.php">
					<button>Läs mer och köp</button>
				</a>

			</div>


		<?php } ?>

	</div>

	<h2 class="flex centered">Utvalda Kategorier</h2>
	<div class="featured">
		<?php 
		require 'model/categoryModel.php';

		$categoryModel = new categoryModel();
		$category = $categoryModel->getCategory();

		$utvaldaCounter = 0;

		foreach ($category as $category) {
			if ($utvaldaCounter == 4) {
				break;
			}
			$utvaldaCounter ++;
		 ?>

		 <div class="featured-card">
		 	<h2><?php echo $category['name'] ?></h2>
		 	<p><?php echo $category['description'] ?></p>
		 	<a href="kategori.php">
		 		<button>Se alla produkter</button>
		 	</a>
		 </div>

		<?php } ?>

	</div>
</main>
</body>
</html>