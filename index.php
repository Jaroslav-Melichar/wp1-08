<?php
$submit = filter_input(INPUT_POST, 'submit' );

if(isset($_POST['genres'])){
$genres = $_POST['genres'];
}

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
echo"Formulář byl odeslán <br> ";  
//var_dump($genres);
 

foreach ($genres as $genre){
    echo $genre."<br>";
}


} else { ?>
<form action="index.php" method="post" > 

<form>
 
    

<h1>Vyber oblíbené herní žánry</h1>
</br>
<input type="checkbox" id="genre1" name="genres[]" value="Horror">
<label for="game">Horrorovky</label><br>
</br>
<input type="checkbox" id="genre2" name="genres[]" value="Action">
<label for="game">Akční</label><br>
</br>
<input type="checkbox" id="genre3" name="genres[]" value="Adventure">
<label for="game">Adventury</label><br>
</br>
<input type="checkbox" id="genre4" name="genres[]" value="Hentai">
<label for="game">Hentai</label><br>
</br>
<input type="checkbox" id="genre5" name="genres[]" value="FPS">
<label for="game">Střílečky</label><br>
</br>
<input type="checkbox" id="genre6" name="genres[]" value="Race">
<label for="game">Závodní</label><br>
</br>
<input type="checkbox" id="genre7" name="genres[]" value="Sport">
<label for="game">Sportovní</label><br>
</br>
<input type="checkbox" id="genre8" name="genres[]" value="Anime">
<label for="game">Animované</label><br>
</br>
<input type="checkbox" id="genre9" name="genres[]" value="Realistic" >
<label for="game">Realistické</label> </br>
<br>
<input type="checkbox" id="genre10" name="genres[]" value="Place" >
<label for="game">Plošinové</label> </br>
<br>
</br>

<input type="submit" value="Odeslat" name="submit" >
</form>
<?php } ?>

</body>
</html>