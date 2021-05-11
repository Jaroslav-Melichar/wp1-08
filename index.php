<?php
$submit = filter_input(INPUT_POST, 'submit' )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblíbené kategorie her</title>
</head>
<body>

<?php
if(isset($submit)) {
echo"Formulář byl odeslán";     
} else { ?>
<form action="index.php" method="post" > 

<form>
 

<h1>Vyber oblíbené herní žánry</h1>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Horrorovky</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Akční</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Adventury</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Hentai</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Střílečky</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Závodní</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Sportovní</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Animované</label><br>
</br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Realistické</label> </br>
<br>
<input type="checkbox" id="game" name="genres[]">
<label for="game">Plošinové</label> </br>
<br>
</br>

<input type="submit" value="Odeslat" name="submit" >
</form>
<?php } ?>

</body>
</html>