Welcome to XSS Challenge<br><br><br>

E-Kitaplar;
<br><br>
kitap1.pdf<br>
kitap3.pdf<br>
kitap4.pdf<br>
kitap5.pdf<br>
kitap6.pdf<br>
kitap7.pdf<br>

<br><br><br> Enter name of the book
<br><br>
<form action="" method="GET">
Book Name:<input type="text" name="lfi">
<input type="submit" name="submit">
</form>

<?php
error_reporting(0);
$lfi = $_GET['lfi'];
 
$out = file_get_contents($lfi);

echo $out;
?>