<!DOCTYPE html>
<html>
<head>

	<title>xkcd Password Generator</title>
	<meta charset='utf-8'>

	<link href='assets/css/main.css' rel='stylesheet'>
	
	<?php require 'assets/php/gibson.php' ?>

	
</head>
<body>


	<div class='container'>
		<h1 class='title'>xkcd Password Generator</h1>

		<p class='password'>
			<?php echo $password ?>
		</p>

		<form>
			<p class='options'>

				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=<?php echo $passLength ?>>  (Max 9)
				<br>

				<input type='checkbox' name='add_number' id='add_number' <?php echo $numberChecked ?>>
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' <?php echo $specialChecked ?>>
				<label for='add_symbol'>Add a symbol:</label>
				<label for='number_of_spchr'>How many:</label>
				<input maxlength=1 type='txt' name='number_of_spchr' id='number_of_spchr' value=<?php echo $spchrLength ?>> (Max 5)
			</p>

			<input type='submit' class='btn btn-default' value='Generate'>

			
		</form>

		<p class='details'>
			<a href='https://xkcd.com/936/'>xkcd password strength</a><br>

			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>

	</div>

</body>
</html>
