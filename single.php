<!DOCTYPE html>

<html>

<?php require('data.php');

$id = $_GET['id'];
$current = $restaurant[$id];
$menu = $current['categories'];
$catalogs = $current['menu'];


?>


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Test</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/single.css">
</head>

<body>
	<main>
		<header class="kfc-header">
			<img class="bg-kfc" src="<?= $current['image_inner'] ?>" alt="img">
			<div class="content">
				<a href="index.php" class="back"><img src="img/back.svg" alt=""></a>
				<div class="kfc-header__inner">
					<div class="info">
						<img class="kfc-header__liked" src="img/full-like.svg" alt="like">
						<div class="info__inner">
							<h3 class="info__time"><?= $current['delivery'] ?></h3>
							<div class="info__right">
								<div class="info__question">?</div>
								<div class="info__rating">
									<img src="img/star.svg" alt="">
									<div class="info__nr"><?= $current['rating'] ?></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class='menu'>
			<div class="content">
				<ul class="menu__lists">
					<?php foreach ($menu as $list) { ?>
						<li class="menu__list"><?= $list ?></li>
					<?php } ?>
				</ul>
			</div>
		</section>

		<section class="catalog-item">
			<div class="content">
				<div class="catalog-item__row">
					<?php
					$id_item = 0;
					foreach ($catalogs as $catalog) { ?>
						<a href="select.php?id=<?= $id ?>&id_item=<?= $id_item ?>" class="catalog-item__column">
							<div class="catalog-item__item">
								<img src="<?= $catalog['image'] ?>" alt="basket" class="catalog-item__img">
								<div class="catalog-item__price"><?= $catalog['price'] ?></div>

							</div>
						</a>
					<?php
						$id_item++;
					} ?>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="cart">
				<img src="img/cart.svg" alt="cart">
				<div class="catalog-item__price cart-price">1</div>
			</div>
		</footer>
	</main>
	<script src="js/app.js"></script>
</body>

</html>