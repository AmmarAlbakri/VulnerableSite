Welcome to SQL Injection Challenge<br><br><br>

Enter User name:
<form action="" method="GET">
<input type="text" name="sql">
<input type="submit" name="submit">
</form>



<?php

error_reporting(0);

$mysqli_link = mysqli_connect("localhost", "ammar", "ammar", "Proje");
 
$sql = "SELECT * FROM Users where name='";
$sql .= $_GET["sql"]."'";   
$result = mysqli_query($sql);
if ($result) {
    ?>
    <table class='table table-striped'>
    <tr><th>id</th><th>name</th><th>age</th></tr>
    <?php
    while ($row = mysql_fetch_assoc($result)) {
        echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['age']."</td>";
        echo "</tr>";
    }    
    echo "</table>";
}
  
// close the db connection
mysqli_close($mysqli_link);
?>