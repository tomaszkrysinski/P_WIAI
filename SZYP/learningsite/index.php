<!DOCTYPE html>
<html lang="pl" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>learningsite_title</title>
		<link rel="stylesheet" href="./css/layout.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<div class="container">
			<header>
				<div class="header-sitelogo">
					<img src="./img/sitelogo.png" alt="logo aplikacji">
				</div>
				<?php include "./includes/accountmenu.php"; ?>
			</header>
			<main>
				<?php include "./includes/sidenav.php"; ?>
				<?php include "./includes/mainpanel.php"; ?>
			</main>
			<footer>
				
			</footer>
		</div>
	</body>
</html>
