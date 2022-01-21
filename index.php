<!DOCTYPE html>

<?php require('data.php') ?>

<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Test</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<main>
		<header class="header">
			<div class="content">
				<div class="header__inner">
					<img class="header__logo" src="img/Logo.svg"></img>
					<img class="header__menu" src="img/menu.svg"></img>
				</div>
			</div>
		</header>
		<section class='promo'>
			<div class="content">
				<h2>Акции</h2>
				<div class="container">
					<?php foreach ($promo as $item) { ?>
						<div class="item promo-item">
							<p><?= $item['text'] ?></p>
							<img src="<?= $item['img'] ?>" alt="promo">
						</div>
					<?php } ?>
				</div>
			</div>
		</section>

		<section class="restaurants">
			<div class="content">
				<h2>Рестораны</h2>
				<?php foreach ($restaurant as $item) { ?>
					<a href="single.php?id=<?= $item['id'] ?>" class="item rest-item">
						<img class="rest-bg" src="<?= $item['image'] ?>" alt="kfc">
						<div class="info">
							<div class="info__inner">
								<h3 class="info__text"><?= $item['name'] ?></h3>
								<img src="img/full-like.svg" alt="like">
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
		</section>
		<footer class="footer">
			<div class="footer__inner">
				<img src="img/like.svg" alt="like">
				<div class="cart">
					<img src="img/cart.svg" alt="cart">
				</div>

				<img src="img/search.svg" alt="search">
			</div>
		</footer>
	</main>
</body>

</html>