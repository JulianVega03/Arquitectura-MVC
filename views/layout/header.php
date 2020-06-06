<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="icon" type="ico/png" href="<?=URL?>public/imagen/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=URL?>public/scss/style.css">
	<meta charset="utf-8">
	<title><?=$titulo?></title>
</head>
<body>
<div class="container__index">
	<header class="header">
		<nav class="header__content">
			<figure class="header__fig">
			<a href="<?=URL?>"><img class="header__picture" src="<?=URL?>public/imagen/logo.png"></a>	
			</figure>
			<ul class="header__menu">
				<li class="header__item">
					<a class="header__item--a" href="ayuda.php">Ayuda</a>
				</li>
				<li class="header__item">
					<a class="header__item--a" href="contacto.php">Contacto</a>
				</li>
			</ul>
		</nav>
	</header>