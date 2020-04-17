<!DOCTYPE html>
<html lang="pl" dir="ltr">
	<head>
		<meta charset="utf-8">
		<?php require './includes/cont/meta_base.php'; ?>
	</head>
	<?php require './includes/db/signupscript.php'; ?>
	<body>
		<div class="container">
			<header>
				<div class="header-sitelogo">
					<img src="./img/sitelogo.png" alt="logo aplikacji">
				</div>
			</header>
			<main>
				<div class="">
					<a href="login.php">Zaloguj się</a>
				</div>
				<div class="" <?php echo htmlspecialchars($accDuplicateFlag); ?> >
					<span>Podana nazwa użytkownika już istnieje. Wybierz inną nazwę.</span>
				</div>
			</main>
			<footer>
				<?php include './includes/cont/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>
