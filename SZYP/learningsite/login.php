<?php require './includes/db/loginscript.php'; ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
	<head>
		<meta charset="utf-8">
		<?php require './includes/cont/meta_base.php'; ?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="header-sitelogo">
					<img src="./img/sitelogo.png" alt="logo aplikacji">
				</div>
			</header>

			<main>
				<form class="form-account" method="post">
					<div class="">
						<span>Nazwa użytkownika / e-mail</span>
						<input type="text" name="username" autocomplete="" value="<?php echo htmlspecialchars($username); ?>">
					</div>

					<div class="">
						<span>Hasło</span>
						<input type="password" name="password" autocomplete="off">
					</div>

					<div class="">
						<a href="signup.php">Załóż konto</a>
					</div>

					<div class="">
						<input type="submit" value="Zaloguj">
					</div>
				</form>
			</main>

			<footer>
				<?php include './includes/cont/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>
