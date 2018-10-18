<?php
  $mysqli = new mysqli("https://mysql.eecs.ku.edu/index.php?token=7f49ca1d533ba7664941f63b77891832#PMAURL:db=m214g324&server=1&target=db_structure.php&token=7f49ca1d533ba7664941f63b77891832", "m214g324", "Rd86Sf90Jd95Mg97", "m214g324")
  if($mysqli->connect_errno)
  {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
  }
 ?>
