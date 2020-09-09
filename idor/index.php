<?php
$value = "guest";

// cookie will expire when the browser close
setcookie("authantication-cookie",$value);
?>
<html>
<body>

<a href="secret-file.php">Click to reach secret file!</a>

</body>
</html>