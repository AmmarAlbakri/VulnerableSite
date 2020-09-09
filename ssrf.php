Welcome to SSRF Challenge<br><br><br>

Enter adress for curl command!<br>
<form action="" method="GET">
<input type="text" name="ssrf">
<input type="submit" name="submit">
</form>
<?php

error_reporting(0);

   $r = $_GET['ssrf'];
   $cmd = shell_exec('curl -v -s '.$r.'');
   echo $cmd;
?>

