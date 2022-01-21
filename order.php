<!DOCTYPE html>

<html>

<?php require('data.php');

$id = $_GET['id'];
$id_item = $_GET['id_item'];
$sause = $_GET['sause'];


$rest = $restaurant[$id];

$current = $rest['menu'][$id_item];

$name = $current['name'];
$desc = $current['description'];

$img = $current['image'];


$price = $current['price'];
$service = 30;
$summ = $price + $service;
$delivery = 230;
$total = $summ + $delivery;



?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Test</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/select.css">
	<link rel="stylesheet" href="css/order.css">
</head>

<body>
	<main>
		<div class="content">
			<form action="final.php?id=<?= $id?>&id_item=<?= $id_item?>" class="form-order">
				<header class="kfc-header">
				<a href="index.php" class="back"><img src="img/back.svg" alt=""></a>
					<div class="top-title">
						Заказ
					</div>
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
				</header>
				<section class="option">
					<div class="top-title">Опции</div>

					<div class="form-option">
						<input class='custom-check' type="checkbox" name="delivery" value="fast" id="delivery">
						<label for='delivery'>
							быстрая доставка
						</label>
						<input class='custom-check' type="checkbox" name="order" value="preorder" id="order">
						<label for='order'>
							предзаказ
						</label>

					</div>

				</section>
				<section class="add">
					<div class="add__first">
						<div class="top-title">Работа сервиса</div>
						<div class="add__first-price">30 Р</div>
					</div>
					<div class="add__sec">
						<div class="top-title">Приборы</div>
						<input type="checkbox" id="toggle">
						<label class="label-toggle" for="toggle">
							<span class="circle"></span>
						</label>
					</div>

				</section>
				<section class="total">
					<div class="top-title">Итого</div>
					<div class="total__delivery">
						<div class="total__item">
							<div class="total__text">Сумма заказа</div>
							<div class="total__price start"><?= $summ?> <span>Р</span></div>
						</div>
						<div class="total__item">
							<div class="total__text">Сумма доставки</div>
							<div class="total__price start"><?= $delivery?> <span>Р</span></div>
						</div>
						<div class="total__item">
							<div class="total__text">Итого</div>
							<div class="total__price start"><?= $total?> <span>Р</span></div>
						</div>
					</div>
				</section>

				<input type="hidden" name="id" value="<?= $id; ?>">
				<input type="hidden" name="id_item" value="<?= $id_item; ?>">

				<button class="popup__btn btn" type="reset">Отменить</button>
				<button class="popup__btn btn btn-orange">Добавить</button>
			</form>
		</div>
	</main>
</body>

</html>