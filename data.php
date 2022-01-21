<?php

$promo = [
	[
		'text' => 'Получи блюдо 
		в подарок',
		'img' => 'img/promo1.png'
	],
	[
		'text' => '2 бургера по цене одной!',
		'img' => 'img/promo2.png'
	],
	[
		'text' => '20% на любой бокс в kfc',
		'img' => 'img/promo3.png'
	],
];


$restaurant = [
	[
		"id" => 0,
		"name" => "KFC",
		"image" => "img/rest/kfc.jpg",
		"image_inner" => "img/kfc-bg.jpg",
		"delivery" => "45-60 мин",
		"rating" => 4.6,
		"categories" => [
			"Баскеты", "Бургеры", "Твистеры", "Ланчбоксы"
		],
		"menu" => [
			[
				"name" => "Баскет 12 острых крылышек",
				"description" => "12 крыльев в острой панировке",
				"price" => 422,
				"image" => "img/kfc/basket.png"
			],
			[
				"name" => "Кола",
				"description" => "освежающий напиток",
				"price" => 100,
				"image" => "img/kfc/coke.png"
			],
			[
				"name" => "Чизбургер",
				"description" => "сыр котлета как вы любите",
				"price" => 322,
				"image" => "img/kfc/burger.png"
			],
			[
				"name" => "Комбо",
				"description" => "3 блюда + кола",
				"price" => 722,
				"image" => "img/kfc/combo.png"
			],
			[
				"name" => "крылышки",
				"description" => "12 острыш крылышек",
				"price" => 222,
				"image" => "img/kfc/fried_chicken.png"
			],
			[
				"name" => "вода",
				"description" => "питевая вода",
				"price" => 22,
				"image" => "img/kfc/coke.png"
			],
		]
	],
	[
		"id" => 1,
		"name" => "MacDonalds",
		"image" => "img/rest/mc.jpg",
		"image_inner" => "img/mcd.jpg",
		"delivery" => "30 мин",
		"rating" => 4.8,
		"categories" => [
			"Напитки", "Бургеры", "Твистеры", "Ланчбоксы"
		],
		"menu" => [
			[
				"name" => "картошечка",
				"description" => "жаренные картошки с сыром",
				"price" => 442,
				"image" => "img/mc/fried.png"
			],
			[
				"name" => "Бургер",
				"description" => "Сочный мозны жи ес",
				"price" => 652,
				"image" => "img/mc/strange.png"
			],
			[
				"name" => "комбо",
				"description" => "тут есть все",
				"price" => 522,
				"image" => "img/mc/mc-combo.png"
			],
			[
				"name" => "с сыром",
				"description" => "бургер с сыром и сырным соусом",
				"price" => 322,
				"image" => "img/mc/cheese.png"
			],
		]
	],
	[
		"id" => 2,
		"name" => "PIZZA",
		"image" => "img/rest/pizza.jpg",
		"image_inner" => "img/pizza_in.jpg",
		"delivery" => "60 мин",
		"rating" => 5,
		"categories" => [
			"Сырная", "Мясная", "Фирменные", "Ф-31"
		],
		"menu" => [
			[
				"name" => "пеперони",
				"description" => "колбаса вфгцпгшвфпц вфцшщрщвшфц вфцщшр",
				"price" => 300,
				"image" => "img/pizza/pep.png"
			],
			[
				"name" => "маргарита",
				"description" => "все что входит",
				"price" => 600,
				"image" => "img/pizza/mar.png"
			],
			[
				"name" => "делюкс",
				"description" => "4 вида пиццы",
				"price" => 50,
				"image" => "img/pizza/delux.png"
			],
		]
	]
];
