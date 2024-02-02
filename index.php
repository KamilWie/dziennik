<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tygodniowy Harmonogram Pracy</title>
</head>
<body>
    <div class="baner"><h1>Tygodniowy Harmonogram Pracy</h1></div>
<?php
$conn = new mysqli("localhost","root","","baza_dziennik");
$kw1 = "SELECT Nazwa FROM zadania WHERE dzien_tygodnia = 1";
$use1 = mysqli_query($conn, $kw1);
$kw2 = "SELECT Nazwa FROM zadania WHERE dzien_tygodnia = 2";
$use2 = mysqli_query($conn, $kw2);
$kw3 = "SELECT Nazwa FROM zadania WHERE dzien_tygodnia = 3";
$use3 = mysqli_query($conn, $kw3);
$kw4 = "SELECT Nazwa FROM zadania WHERE dzien_tygodnia = 4";
$use4 = mysqli_query($conn, $kw4);
$kw5 = "SELECT Nazwa FROM zadania WHERE dzien_tygodnia = 5";
$use5 = mysqli_query($conn, $kw5);

echo "<div class='glowny'>
<div id='poniedzialek' class='dzien'><h2>Poniedziałek</h2><ul><li>";
while($tab=mysqli_fetch_row($use1)){echo "$tab[0]";}
echo"</li></ul></div>
<div id='wtorek' class='dzien'><h2>Wtorek</h2><ul><li>";
while($tab=mysqli_fetch_row($use2)){echo "$tab[0]";}
echo "</li></ul></div>
<div id='sroda' class='dzien'><h2>Środa</h2><ul><li>";
while($tab=mysqli_fetch_row($use3)){echo "$tab[0]";}
echo "</li></ul></div>
<div id='czwartek' class='dzien'><h2>Czwartek</h2><ul><li>";
while($tab=mysqli_fetch_row($use4)){echo "$tab[0]";}
echo "</li></ul></div>
<div id='piatek' class='dzien'><h2>Piątek</h2><ul><li>";
while($tab=mysqli_fetch_row($use5)){echo "$tab[0]";}
echo "</li></ul></div>
</div>";
?>




    <footer>
        <a>Wykonał:Kamil</a>
        <p id="datetime"></p>
    </footer>

    <script src="script.js"> </script>
</body>
</html>