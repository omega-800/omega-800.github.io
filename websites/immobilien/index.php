<!DOCTYPE html>
<html lang="de">
		<?php include ('content/head.php');?>
	<body>
		<div class= "wrapper">
			<header>
				<?php include ('content/header.php');?>
				<?php include ('content/navbar.php');?>
			</header>
		
			<main>
				<article>
					<?php include ('content/article.php');?>
				</article>

				<div class = "houses">
					<?php include ('php/createHouses.php');?>
				</div>
			</main>
			<footer>
				<?php include ('content/footer.php');?>
			</footer>
		</div>
	</body>
</html>
