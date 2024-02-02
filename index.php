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
$use = mysqli_query($conn, $kw1);
$row = mysqli_fetch_array($use);


?>
<div class='glowny'>
<div id='poniedzialek' class='dzien'><h2>Poniedziałek</h2><ul><li>
<?php
while ($row = mysqli_fetch_row($use)) {
    echo $row['Nazwa'];
}
?>
</li></ul></div>
<div id='wtorek' class='dzien'><h2>Wtorek</h2><ul><li></li></ul></div>
<div id='sroda' class='dzien'><h2>Środa</h2><ul><li></li></ul></div>
<div id='czwartek' class='dzien'><h2>Czwartek</h2><ul><li></li></ul></div>
<div id='piatek' class='dzien'><h2>Piątek</h2><ul><li></li></ul></div>
</div>



    <footer>
        <a>Wykonał:Kamil</a>
        <p id="datetime"></p>
    </footer>

    <script src="script.js"> </script>
</body>
</html>