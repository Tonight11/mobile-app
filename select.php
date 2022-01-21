<!DOCTYPE html>

<html>

<?php require('data.php');

$id = $_GET['id'];
$id_item = $_GET['id_item'];



$rest = $restaurant[$id];

$current = $rest['menu'][$id_item];

$name = $current['name'];
$desc = $current['description'];
$price = $current['price'];
$img = $current['image'];


?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Test</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/single.css">
	<link rel="stylesheet" href="css/select.css">
</head>

<body>
	<main>
		<header class="kfc-header">
			<img class="bg-kfc" src="<?= $rest['image_inner'] ?>" alt="">
			<div class="content">
			<a href="index.php" class="back"><img src="img/back.svg" alt=""></a>
				<div class="kfc-header__inner">
					<div class="info">
						<img class="kfc-header__liked" src="img/full-like.svg" alt="like">
						<div class="info__inner">
							<h3 class="info__time"><?= $rest['delivery'] ?></h3>
							<div class="info__right">
								<div class="info__question">?</div>
								<div class="info__rating">
									<img src="img/star.svg" alt="">
									<div class="info__nr"><?= $rest['rating'] ?></div>

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
					<li class="menu__list active">Баскеты</li>
					<li class="menu__list">Бургеры</li>
					<li class="menu__list">Твистеры</li>
					<li class="menu__list">Ланчбоксы</li>
				</ul>
			</div>
		</section>

		<section class="catalog-item">
			<div class="content">
				<div class="catalog-item__row">
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
					<div class="catalog-item__column">
						<div class="catalog-item__item">
							<img src="img/basket.png" alt="" class="catalog-item__img">
							<div class="catalog-item__price">522 Р</div>

						</div>
					</div>
				</div>
			</div>
		</section>


	</main>
	<div class="popup" id="popup">
		<div class="popup__body">
			<div class="popup__content">
				<a class="popup__close" style="cursor: pointer;">
					X
				</a>
				<div class="popup__top">
					<div class="popup__img">
						<img src="<?= $img ?>" alt="basket">
					</div>
					<div class="popup__info">
						<div class="popup__text"><?= $name ?></div>
						<div class="popup__subtext"><?= $desc ?> </div>
						<div class="popup__info-bot">
							<div class="popup__count">
								<div class="popup__plus count">-</div>
								<div class="popup__nr">1</div>
								<div class="popup__minus count">+</div>
							</div>
							<div class="popup__price"><?= $price ?> <span>P</span></div>
						</div>
					</div>
				</div>
				<form class='popup__form' action="order.php" method="get">
					<div class="popup__other">
						<div class="popup__other-item">
							<input class='custom-check' type="radio" name="sause" value="hot " id="hot">
							<label for='hot'>
								с острым соусом
							</label>
						</div>
						<div class="popup__other-item">
							<input class='custom-check' type="radio" name="sause" value="without" id='out' checked>
							<label for='out'>
								без
							</label>
						</div>
					</div>

					<input type="hidden" name="id" value="<?= $id; ?>">
					<input type="hidden" name="id_item" value="<?= $id_item; ?>">

					<button class="popup__btn btn" type="reset">Отменить</button>
					<button class="popup__btn btn btn-orange">Добавить</button>

				</form>

			</div>

		</div>

	</div>
</body>

</html>