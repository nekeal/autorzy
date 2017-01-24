<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Autorzy</title>
</head>
<body>
<form action="formularz.php" method="post">
<div class="form-group">
    <label for="nazwisko">Nazwisko</label>
    <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Wprowadź nazwisko">
</div>
<div class="form-group">
    <label for="imie">Imię</label>
    <input type="text" class="form-control" id="imie" name="imie" placeholder="Wprowadź imię">
</div>
<div class="form-group">
    <label for="data-urodzenia">Data urodzenia</label>
    <input type="date" class="form-control" id="data-urodzenia" name="data_ur" placeholder="Wprowadź datę urodzenia">
</div>
<div class="form-group">
    <label for="miejsce-urodzenia">Miejsce urodzenia</label>
    <input type="text" class="form-control" id="miejsce-urodzenia" name="miejsce_ur" placeholder="Wprowadź miejsce urodzenia">
</div>
    <input class='btn btn-success' type="submit" value="wyslij" />
</form>

<?php
include("connect.php");
$db=mysqli_connect($servername,$username,$password,$db_name) or die("Nie można połączyć");
if(mysqli_errno($db))
    echo "błąd laczenia";
$nazwisko=$_POST['nazwisko'];
$imie=$_POST['imie'];
$data_ur=$_POST['data_ur'];
$miejsce_ur=$_POST['miejsce_ur'];
$zapytanie ="insert into autorzy values (null,'$imie','$nazwisko','$data_ur','$miejsce_ur')";
echo "<p>".$zapytanie."<p>";
$wynik = mysqli_query($db,$zapytanie);

$query="select * from autorzy";
$rezultat = mysqli_query($db, $query);
echo('<table class="table table-striped">');
echo("<tr><td>Autor id</td><td>Imie</td><td>Nazwisko</td><td>data urodz</td><td>miejsce ur</td></tr>");
while($wiersz=mysqli_fetch_row($rezultat))
{
   echo("<tr><td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td><td>$wiersz[3]</td><td>$wiersz[4]</td></tr>");
} 
echo("<table/>");
?>
</body>
</html>
