<?php
  $user_name = $_POST['UserName'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "m214g324", "Rd86Sf90Jd95Mg97", "m214g324");
  if($mysqli->connect_errno)
  {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "INSERT INTO Users (user_id) VALUES ('" . $user_name . "')";
  if($mysqli->query($query) === TRUE)
  {
    echo "New user created successfully";
  }
  else
  {
    echo "This username already exists. Please choose a different name.";
  }
  $mysqli->close();
 ?>
