Welcome to RCE Challenge<br><br><br>

Enter adress for whois command!<br>
<form action="" method="GET">
<input type="text" name="rce">
<input type="submit" name="submit">
</form>

<?php
error_reporting(0);

$rce = $_GET['rce'];
$system = system('whois '.$rce.'');
echo $system;
?>