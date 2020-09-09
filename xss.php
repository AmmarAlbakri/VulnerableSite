Welcome to XSS Challenge<br><br><br>


Any value you enter will be printed!<br><br>
<form action="" method="GET">
<input type="text" name="xss">
<input type="submit" name="submit">
</form>

<?php  
error_reporting(0);

    $xss = $_GET['xss'];
    echo $xss;


?>