<!DOCTYPE html>
<html>
 <head>
  <title>POTĘGOWANIE</title>
  <meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
 <body>
<header>
<a href="index.html"><img src="baner.jpg" alt="baner"></a>
  </header>
  <nav>
<a href="strona1.html">- proste działania</a>
<a href="strona2.php">- potęgowanie</a>
  </nav>
  <main>
<h1>POTĘGOWANIE</h1>
  <form method="post" action="strona2.php">
<i>Podaj podstawę potęgi:</i>
 <input type="number" name="liczba1" /><br/>
<i>Podaj dodatni, całkowity wykładnik potęgi:</i>
 <input type="number" name="liczba2" /><br/>
<input type="submit" value="POTĘGOWANIE" name="oblicz"/>
</form>
<?php
if (empty($_POST['liczba1']) || (empty($_POST['liczba2'])
 && $_POST['liczba2']!=0)) {
    echo "Wpisz podstawę i wykładnik potęgi";
}
else {
 if ($_POST['liczba2']>=0) {    
 echo "Wynik działania wynosi: ";
 echo pow($_POST['liczba1'], $_POST['liczba2']);
 }
 else {
 echo "Wykładnik potęgi musi być dodatni";
 }
}  
?>
</main>
</body>
</html>
