<!DOCTYPE html>
<html lang="pl" dir="ltr">
	<head>
		<meta charset="utf-8">
		<?php require './includes/cont/meta_base.php'; ?>
	</head>
	<?php require './includes/db/sessionhandler.php'; ?>
	<body>
		<div class="container">
			<header>
				<div class="header-sitelogo">
					<img src="./img/sitelogo.png" alt="logo aplikacji">
				</div>
				<?php include './includes/cont/accountmenu.php'; ?>
			</header>
			<main>
				<?php include './includes/cont/accountpanel.php'; ?>
			</main>
			<footer>
				<?php include './includes/cont/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>
