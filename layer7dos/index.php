
Username list:<br><br><br>


<?php

$file = file_get_contents("dosya.txt");

echo substr($file,0,3000);
?>

<form action="" method="POST">
<input type="hidden" id="custId1" name="custId1" value="0">
<input type="hidden" id="custId2" name="custId2" value="3000">
<input type="submit" value="Sayfa 1">
</form>
<?php
if(isset($_POST['custId1'])){

    $parametre1 = $_POST['custId1'];
    $parametre2 = $_POST['custId2'];
    $file = file_get_contents("dosya.txt");
    echo substr($file,$parametre1,$parametre2);
} else {
    
}

?>

<form action="" method="POST">
<input type="hidden" id="custId3" name="custId3" value="3000">
<input type="hidden" id="custId4" name="custId4" value="6000">
<input type="submit" value="Sayfa 2">
</form>
<?php
if(isset($_POST['custId3'])){

    $parametre1 = $_POST['custId3'];
    $parametre2 = $_POST['custId4'];
    $file = file_get_contents("dosya.txt");
    echo substr($file,$parametre1,$parametre2);
} else {
    
}
?>
<form action="" method="POST">
<input type="hidden" id="custId5" name="custId5" value="6000">
<input type="hidden" id="custId6" name="custId6" value="9000">
<input type="submit" value="Sayfa 3">
</form>
<?php
if(isset($_POST['custId5'])){

    $parametre1 = $_POST['custId5'];
    $parametre2 = $_POST['custId6'];
    $file = file_get_contents("dosya.txt");
    echo substr($file,$parametre1,$parametre2);
} else {
    
}
?>