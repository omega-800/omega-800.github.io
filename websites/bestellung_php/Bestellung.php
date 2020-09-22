<?php
	$errorfields=array();
	$errors=array();
	
	if(isset($_POST['send'])){
		if($_POST['name'] === '') {
			$errors ['name'] = 'Bitte geben Sie einen Namen ein!';
			$errorfields ['name'] = 'name';
		}
		if($_POST['vorname'] === '') {
			$errors ['vorname'] = 'Bitte geben Sie einen Vornamen ein!';
			$errorfields ['vorname'] = 'vorname';
		}
		if($_POST['email'] === '') {
			$errors ['email'] = 'Bitte geben Sie eine Email an!';
			$errorfields ['email'] = 'email';
		}
		if (!isset($_POST['infos'])){
			$errors ['infos'] = 'Bitte wählen Sie mind. 1 Info aus!';
			$errorfields ['infos'] = 'infos';
		}
		if (!isset($_POST['news'])){
			$errors ['news'] = 'Bitte wählen Sie etwas aus!';
			$errorfields ['news'] = 'news';
		}
	}
	/*
	foreach($errors as $error) {
		echo $error, '<br></span>';
	}
	*/
	
	if (isset($_POST['send']) && count($errors) === 0){
		echo '<h1>Danke für Ihre Bestellung!</h1>';
	} else {
	foreach($errorfields as $errorfield) {
		echo '<style>#' . $errorfield . '{background-color:#ff8080;}</style>';
	}
?>

		<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Bestellung">
		<link href="css.css" rel="stylesheet">
		<title>Bestellung</title>
	</head>
	<body>
		<form method="POST" action="Bestellung.php">
			<br>
			<label>
				*Name: <br>
				<input type="text" name="name"  id="name" value="<?php if (
				isset($_POST['name'])) echo $_POST['name']; ?>" autofocus>
			</label>
			<?php
				if(isset($errors['name'])){
					echo '<br><small>' . $errors['name'] . '</small><br>';
				}
			?>
			<br>
			<label>
				*Vorname: <br>
				<input type="text" name="vorname"  id="vorname" value="<?php if (
				isset($_POST['vorname'])) echo $_POST['vorname']; ?>">
			</label>
			<?php
				if(isset($errors['vorname'])){
					echo '<br><small>' . $errors['vorname'] . '</small><br>';
				}
			?>
			<br>
			<label>
				*Email: <br>
				<input type="email" name="email"  id="email" value="<?php if (
				isset($_POST['email'])) echo $_POST['email']; ?>">
			</label>
			<?php
				if(isset($_POST['email'])){
					$email = $_POST['email'];
					$pattern = '/^[a-z0-9\.\-_]+@[a-z0-9\-]{2,}\.[a-z]{2,4}$/i';
			
					if (preg_match($pattern, $email)){
					}
					else{
						echo ' - ' . 'Email ist nicht korrekt!';	
					}
				}
			?>
			<?php
				if(isset($errors['email'])){
					echo '<br><small>' . $errors['email'] . '</small><br>';
				}
			?>
			<br><br>
			<fieldset>
				<legend  id="infos">*Ich bestelle Informationen zu</legend>
				<label class="infos">
					<input type="checkbox" name="infos[]" value="PHP">
					PHP
					<span class="checkmark"></span>
				</label>
				<br>
				<label class="infos">
					<input type="checkbox" name="infos[]" value="JavaScript">
					JavaScript
					<span class="checkmark"></span>
				</label>
				<br>
				<label class="infos">
					<input type="checkbox" name="infos[]" value="CSS">
					CSS
					<span class="checkmark"></span>
				</label>
				<?php
					if(isset($errors['infos'])){
						echo '<small>' . $errors['infos'] . '</small><br>';
					}
				?>
			</fieldset>
			<br>
			<fieldset>
				<legend id="news">*Ich abonniere den Newsletter</legend>
				<label class="news"  checked="checked">
					<input type="radio" name="news" value="Ja">
					Ja
					<span class="checkmark2"></span>
				</label>
				<br>
				<label class="news">
					<input type="radio" name="news" value="Nein">
					Nein
					<span class="checkmark2"></span>
				</label>
				<?php
					if(isset($errors['news'])){
						echo '<small>' . $errors['news'] . '</small><br>';
					}
				?>
			</fieldset>
			<br>
			<p id="felder">* => Pflichtfelder!</p>
			<br>
			<label>
				<input type="submit" value="Senden" name="send">
			</label>
		</form>
		<div class="angaben">
			<h3>Angaben:</h3>
			<?php
			}
				if(isset($_POST['send'])){
					echo '<br>' . 'Name: ' . $_POST['name'] . '<br>';
					echo 'Vorname: ' . $_POST['vorname'] . '<br>';
					echo 'Email: ' . $_POST['email'] . '<br>';
					echo '<br>' . 'Infos: ';
					if(isset($_POST['infos'])){
						$sprachenString = implode(', ', $_POST['infos']);
						echo $sprachenString;
					}
					echo '<br>' . 'News: ';
					if(isset($_POST['news'])){
						echo $_POST['news'];
					}
				}
			?>
		</div>
	</body>
</html>